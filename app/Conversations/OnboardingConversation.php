<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use App\Conversations\BotMan;

class OnboardingConversation extends Conversation
{
    protected $firstname;

    protected $email;

    public function askFirstname()
    {
            $this->say('Hai, '.auth()->user()->name. ' 😀');
            
            $this->askBelajar();
    }

    public function askBelajar(){
        $question = Question::create("Mau belajar apa kita hari ini?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Frontend Developer')->value('frontend'),
                Button::create('Backend Developer')->value('backend'),
                Button::create('Desain Grafis')->value('desain'),
                Button::create('Nanti deh')->value('nanti'),
                // Button::create('Backend Developer')->value('quote'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'frontend') {
                    $this->say('Oke, '.auth()->user()->name. ', Ayo kita belajar Frontend Developer! 😃');
                    $this->askFrontend();
                }else if (($answer->getValue() === 'backend')){
                    $this->say('Oke, '.auth()->user()->name. ', Ayo kita belajar!');
                    $this->askBackend();
                }else if (($answer->getValue() === 'desain')){
                    $this->say('Oke, '.auth()->user()->name. ', Ayo kita belajar!');
                    $this->askDesain();
                }else if (($answer->getValue() === 'nanti')){
                    $this->say('Oke, '.auth()->user()->name. ' nanti aja kita belajarnya');
                }
            }
                
        });
    }

    public function askFrontend(){
        
        $this->say('💥 Menjadi Frontend Web Developer 💥');
        $this->say('Langkah pertama untuk menjadi Frontend Developer yang baik adalah dengan mempelajari 
        dasar-dasar Internet.');
        $question = Question::create("Mulai belajar sekarang?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Mulai belajar')->value('mulai'),
                Button::create('Nanti')->value('nanti'),
            ]);

            return $this->ask($question, function (Answer $answer) {
                if ($answer->isInteractiveMessageReply()) {
                    if ($answer->getValue() === 'mulai') {
                        $this->say('Oke, '.auth()->user()->name. ', Ayo kita belajar Internet!');
                        $this->askFrontendInternet();
                    }else if ($answer->getValue() === 'nanti'){
                        $this->say('Oke, '.auth()->user()->name. ', Nanti kita bertemu lagi');
                        $this->askBelajar();
                    }
                    
        }
    });
        
    }
    
    public function askBackend(){
        
        $this->say('untuk belajar backend, kamu harus mulai dari belajar php, '.$this->firstname);
    }
    
    public function askDesain(){
        
        $this->say('untuk belajar desain, kamu harus mulai dari belajar layout, '.$this->firstname);
    }
    
    public function askFrontendInternet(){
        $this->say('Internet adalah jaringan komunikasi elektronik yang menghubungkan jaringan komputer dengan fasilitas komputer di seluruh dunia.
         Jaringan ini tersusun dan terorganisir melalui telepon atau satelit.');
        $this->askFrontendInternet2();
    }

    public function askFrontendInternet2(){
        
        $this->say('Selanjutnya, Bagaimana cara kerja internet? 🤔');
        $question = Question::create("Lanjut belajar?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Lanjut')->value('mulai'),
                Button::create('Nanti')->value('nanti'),
            ]);

            return $this->ask($question, function (Answer $answer) {
                if ($answer->isInteractiveMessageReply()) {
                    if ($answer->getValue() === 'mulai') {
                        $this->say('Oke, '.auth()->user()->name. ', kita bahas Internet lebih dalam lagi');
                        $this->askFrontendInternet3();
                    }else if ($answer->getValue() === 'nanti'){
                        $this->say('Oke, '.auth()->user()->name. ', Nanti kita bertemu lagi');
                        $this->askBelajar();
                    }
                    
        }
    });
        
    }

    public function askFrontendInternet3(){
        $this->say('internet bekerja dengan bantuan ISP (Internet Service Protocol)');
        $this->say('Internet Service Protocol akan memberikan alamat ke komputer atau laptop. Kemudian ISP akan melakukan konfigurasi alamat agar supaya alamat tersebut bisa tersambung ke server ISP. Pengaturan tersebut biasanya akan dilakukan di router yang mana dari router inilah pengguna bisa melakukan berbagai macam konfigurasi lainnya sesuai dengan kebutuhan.  Beberapa konfigurasi yang bisa dilakukan adalah pembatasan sinyal, pembatasan kecepatan, daftar blokir, dan lain-lain.');
        $this->askFrontendInternet4();
    }
    public function askFrontendInternet4(){
        
        $this->say('Setelah mengerti konsep dasar internet, kita akan mulai masuk ke HTML sekarang');
        $question = Question::create("Lanjut belajar?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Lanjut')->value('mulai'),
                Button::create('Nanti')->value('nanti'),
            ]);

            return $this->ask($question, function (Answer $answer) {
                if ($answer->isInteractiveMessageReply()) {
                    if ($answer->getValue() === 'mulai') {
                        $this->say('Oke, '.auth()->user()->name. ', Ayo kita belajar HTML! 😃');
                        $this->askFrontendHTML();
                    }else if ($answer->getValue() === 'nanti'){
                        $this->say('Oke, '.auth()->user()->name. ', Nanti kita bertemu lagi');
                        $this->askBelajar();
                    }
                    
        }
    });
        
    }

    public function askFrontendHTML(){
        $this->say('HTML adalah bahasa standar pemrogaman yang digunakan untuk membuat halaman website, yang diakses melalui internet. 
        Singkatan dari "Hypertext Markup Language" atau "bahasa markup".');
        $this->askFrontendHTML2();
    }
    
    public function askFrontendHTML2(){
        $this->say('Dilansir Techterms, "Hypertext" mengacu pada hyperlink yang mungkin terdapat dalam halaman HTML. Bahasa markup ini mengacu pada cara tag yang digunakan, 
        untuk menentukan tata letak halaman dan elemen di dalam halaman.');
        $this->say('HTML disusun berdasar kode dan simbol tertentu, yang dimasukkan dalam sebuah file atau dokumen. Sehingga bisa ditampilkan pada layar komputer. 
        Dan bisa dipahami oleh para pengguna internet.');
        $this->askSelesai();
    }

    public function askSelesai(){
        
        $this->say('Selamat! kamu sudah menyelesaikan series Menjadi Frontend Web Developer 💯');
        $this->say('Kamu berhak mendapatkan sertifikat sebagai Frontend Web Developer!');
        $question = Question::create("Mau belajar apa lagi?")
        ->fallback('Unable to ask question')
        ->callbackId('ask_reason')
        ->addButtons([
            Button::create('Klaim sertifikat')->value('sertifikat'),
            // Button::create('Backend Developer')->value('quote'),
        ]);

    return $this->ask($question, function (Answer $answer) {
        if ($answer->isInteractiveMessageReply()) {
            if ($answer->getValue() === 'sertifikat') {
                $this->say( auth()->user()->name. ', Selamat  atas pencapaian belajar kamu 😃');
                $this->say('Sertifikat ini akan muncul di setiap postingan keahlianmu untuk memverifikasi keahlian yang kamu punya!');
                $this->sertificate();
        }
    }
            
    });
}
    public function sertificate(){
            return view('dashboard');
    }
    public function run()
    {
        // This will be called immediately
        $this->askFirstname();
    }

    
}