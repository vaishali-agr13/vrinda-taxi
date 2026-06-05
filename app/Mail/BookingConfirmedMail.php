<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Mail\Mailable;

class BookingConfirmedMail extends Mailable
{
    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('Your Booking Status Has Been Updated')
                    ->view('emails.booking-confirmed');
    }
}