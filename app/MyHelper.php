<?php

namespace App;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Mail;
use Log;
use Aloha\Twilio\Twilio;
use DB;
use App\SendLog;


class MyHelper {
    static function send_mail($view, $data, $to, $subject) {
		Mail::send($view, $data,
            function ($message) use ($to, $subject) {
                $message->from('support@' . env('APP_DOMAIN'), env('APP_TITLE'));
                $message->to(trim($to));
                $message->subject($subject);
            }
        );

    }

}
