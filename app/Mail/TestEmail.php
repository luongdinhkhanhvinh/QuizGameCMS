<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $test

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($test)
    {
        $this->test=$test;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.test-mail')
                            ->text('email.test_plan')
                            ->with([
                                    'gia_tri_1'=>1,
                                    'gia_tri_2'=>100
                                ])
                            ->attach(public_path('/assets/images').'/test.jpg',[
                                'as'=>'test.jpg',
                                'mime'=>'image/jpeg',
                                ]);
    }
}
