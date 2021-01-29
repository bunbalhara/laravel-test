<?php

namespace App\Http\Controllers;
use Mail;

class MailController extends Controller {
    public function basic_email() {

        try {
            $data = array('name'=>"Virat Gandhi");

            Mail::send(['text'=>'mail'], $data, function($message) {
                $message->to('nanjingzhe425@gmail.com', 'Tutorials Point')
                    ->subject('Laravel Basic Testing Mail');
                $message->from('giw@webbb.site','Virat Gandhi');
            });

            echo "Basic Email Sent. Check your inbox.";

        }catch (\Exception $exception){
            dd($exception);
        }

    }
    public function html_email() {

        try {
            $data = array('name'=>"Virat Gandhi");
            Mail::send('mail', $data, function($message) {
                $message->to('darkinstar@outlook.com', 'Tutorials Point')->subject
                ('Laravel HTML Testing Mail');
                $message->from('giw@webbb.site','Virat Gandhi');
            });
            echo "HTML Email Sent. Check your inbox.";
        }catch (\Exception $exception){
            dd($exception);
        }

    }
    public function attachment_email() {

        try {
            $data = array('name'=>"Virat Gandhi");
            Mail::send('mail', $data, function($message) {
                $message->to('darkinstar@outlook.com', 'Tutorials Point')->subject
                ('Laravel Testing Mail with Attachment');
                $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
                $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
                $message->from('giw@webbb.site','Virat Gandhi');
            });
            echo "Email Sent with attachment. Check your inbox.";
        }catch (\Exception $exception){
            dd($exception);
        }

    }
}
