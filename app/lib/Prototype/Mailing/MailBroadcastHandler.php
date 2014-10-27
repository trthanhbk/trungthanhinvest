<?php namespace Prototype\Mailing;


use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Prototype\Interfaces\UserRepository;

class MailBroadcastHandler {
    protected $mail;
    private $user;

    /**
     * @param Mailer $mail
     * @param UserRepository $user
     */
    function __construct(Mailer $mail, UserRepository $user) {
        $this->mail = $mail;
        $this->user = $user;
    }

    public function onLeaveReportMade($request) {
        $data = [
            "name" => $request->approval->firstname
        ];
        $this->mail->send("emails.leave_report_made", $data, function($mail) use ($request) {
            $mail->to($request->approval->email, 'HRM Engine')->subject('You have pending leave report to check');
        });
    }

    public function onLeaveReportApprove() {
        if (\Auth::user()->role_id == LEADER_ID) {
            $pms = $this->user->getAllPM();

            foreach ($pms as $pm) {
                $data = [
                    "name" => $pm->firstname
                ];
                $this->mail->send("emails.leave_report_made", $data, function ($mail) use ($pm) {
                    $mail->to($pm->email, 'HRM Engine')->subject('You have pending leave report to check');
                });
            }

        }
    }
}