<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Prototype\Interfaces\RequestRepository;
use Prototype\Interfaces\UserRepository;

class UsersController extends BaseController
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('auth', array('only' => array('getDashboard', 'getUserLists', 'getChangeUserRole', 'postChangeUserRole')));
        $this->userRepository = $userRepository;
    }

    public function getIndex()
    {
        return Redirect::action("UsersController@getDashboard");
    }

    public function getLogin()
    {
        return View::make('users.login');
    }

    public function postSignin()
    {
        if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) {
            return Redirect::intended(action('UsersController@getDashboard'))->with('message', trans('labels.You are now logged in!'));
        } else {
            return Redirect::action('UsersController@getLogin')
                ->with('message', trans('labels.login incorrect'))
                ->withInput();
        }
    }

    public function getDashboard()
    {
        $user = $this->userRepository->getById(1);
        return View::make('users.dashboard', compact("user"));
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::action('UsersController@getLogin')->with('message', trans('labels.Your are now logged out!'));
    }

    public function getDetail()
    {
        $user = Auth::user();
        return View::make("users.detail", compact("user"));
    }

    public function postUpdateProfile()
    {
        $user = $this->userRepository->updateProfile();
        if ($user === true)
            return Redirect::action('UsersController@getDetail')->with('message', trans('labels.Profile is successful updated!'));
        else
            return Redirect::action('UsersController@getDetail')->with('message', trans('labels.The following errors occurred'))->withErrors($user->errors())->withInput();
    }

    public function getForgotPassword()
    {
        return View::make("users.forgot_password");
    }

    public function postForgotPassword()
    {
        $user = $this->userRepository->forgotPassword();
        if ($user === true)
            return Redirect::action('UsersController@getLogin')->with('message', trans('labels.Password is successful resent!'));
        else
            return Redirect::action('UsersController@getForgotPassword')->with('message', trans('labels.Email is not registered'));
    }
} 