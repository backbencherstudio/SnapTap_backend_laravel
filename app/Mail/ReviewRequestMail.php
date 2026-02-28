<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReviewRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $review;
    public $reviewLink;
    public $externalProviderId;
    public $provider;

    public function __construct($review, $reviewLink, $externalProviderId)
    {
        $this->review = $review;
        $this->reviewLink = $reviewLink;
        $this->externalProviderId = $externalProviderId;
        $this->provider = $review->provider;
    }

    public function build()
    {
        return $this
            ->subject('We’d Love Your Review!')
            ->view('emails.review-request');
    }
}
