<?php namespace Prototype\DBClasses\Eloquent;

use Illuminate\Support\Facades\Mail;
use Prototype\Interfaces\UserRepository;
use Prototype\BaseClasses\AbstractEloquentRepository;

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepository {

    protected $model;
    private $role;

    public function __construct(\User $model, \Role $role) {
        $this->model = $model;
        $this->role = $role;
    }

    public function changeAppCloseStatus($id) {
        $user = $this->model->find($id);
        $user->app_close = $user->app_close == STATUS_USER_ACTIVE ? STATUS_USER_IN_ACTIVE : STATUS_USER_ACTIVE;
        if ($user->exists) {
            $user::$rules = $this->_ruleForUpdating($user);
        }
        $user->save();
    }

    private function _ruleForUpdating($user) {
        $user::$rules['password'] = '';
        $user::$rules['password_confirmation'] = '';
        $user::$rules['username'] = '';
        $user::$rules['email'] = '';
        return $user::$rules;
    }

    private function _ruleForChangePassword($user) {
        $user::$rules['username'] = '';
        $user::$rules['email'] = '';
        return $user::$rules;
    }

    public function resetPassword($id) {
        $user = $this->model->find($id);
        $user->password = DEFAULT_PASSWORD;
        if ($user->exists) {
            $user::$rules = $this->_ruleForUpdating($user);
        }
        $user->save();
    }

    public function updateProfile() {
        $user = \Auth::user();
        $user->email = \Input::get('email');
        $user::$rules = \Input::get('password') == "" ? $this->_ruleForUpdating($user) : $this->_ruleForChangePassword($user);
        if (\Input::get('password') != "") {
            $user->password = \Input::get('password');
            $user->password_confirmation = \Input::get('password_confirmation');
        }
        if ($user->save()) {
            return true;
        }
        return $user;
    }

    public function forgotPassword() {
        $email = \Input::get('email');
        $user = $this->getFirstBy('email', $email);
        if ($user){
            $this->resetPassword($user->id);
            $data = [
                "name" => $user->username,
                'password' => DEFAULT_PASSWORD,
            ];
            Mail::send('emails.forgot_password', $data, function($mail) use ($user){
               $mail->to($user->email)->subject("Resend Password");
            });
            return true;
        }
        return false;
    }
}