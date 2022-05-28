<?php

namespace App\Http\Controllers;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\ExampleConversation;
use App\Conversations\OnboardingConversation;

class BotmanController extends Controller
{
    protected $name;
    protected $question;
    protected $next = 0;


    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if (stripos($message, 'hai') !== false) {
                $this->startConversation($botman);
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

     /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new OnboardingConversation());
    }
}