<?php

namespace App\Http\Controllers;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotmanController extends Controller
{
    protected $name;
    protected $question;
    protected $next = 0;


    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if ($message == 'hai') {
                $this->askName($botman);
                return $message;
            } elseif (stripos($message, 'xerabutan') !== false) {
                $this->askOptimasi($botman);
                return $message;
            } elseif (stripos($message, 'layanan') !== false || stripos($message, 'service') !== false) {
                $this->askLayanan($botman);
                return $message;
            } else {
                $botman->reply("Ucapkan 'Hai' untuk memulai percakapan...");
            }
        });



        $botman->listen();
    }

    public function tinker()
    {
        return view('tinker');
    }

    public function askName($botman)
    {
        $botman->ask('Halo! Siapa nama kamu?', function (Answer $answer) {
            $this->name = $answer->getText();
            $this->say('Hai ' . $this->name . ' , Apa yang ingin anda tanyakan?');
        });
    }

    public function askOptimasi($botman)
    {
        $botman->reply("Xerabutan adalah platform freelance untuk mahasiswa Indonesia");
    }

    public function askLayanan($botman)
    {
        $botman->reply("Layanan dari kami salah satunya adalah monitoring website");
    }
}