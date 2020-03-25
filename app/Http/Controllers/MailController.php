<?php

namespace App\Http\Controllers;

use Dacastro4\LaravelGmail\Facade\LaravelGmail;
use Illuminate\Http\Request;
use Dacastro4\LaravelGmail\Services\Message\Mail;

class MailController extends Controller
{
    public function read()
    {;
        //$mails =  LaravelGmail::message()->all();

        $messages = LaravelGmail::message()->subject('test')->unread()->preload()->all();
        foreach ( $messages as $message ) {
            $body = $message->getHtmlBody();
            $subject = $message->getSubject();

            echo "$subject  >>> $body ";
            return;
        }


    }
}
