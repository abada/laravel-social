<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function SendMail()
    {
        \Mail::send('emails.inquiry',
            ['name' => 'user',
                'email' => 'test@test.ru',
                'content' => 'Ping-pong'
            ],
            function ($message) {
                $message->from('grol55@mail.ru');
                $message->to('grol5555@yandex.ru')->subject('Welcome!');
            }
        );
        return 'Mail Send!';
    }
}
