<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Alert extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    public function __construct($student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->subject('Admission Confirmation')
                    ->view('emails.alert')
                    ->with([
                        'name' => $this->student->name,
                        'course' => $this->student->course,
                    ]);
    }
}
