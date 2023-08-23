<?php

namespace App\Mail;

use App\Models\BoqRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BoqRequestApprovedEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var BoqRequest
     */
    private $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(BoqRequest $request)
    {
        //
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $req = $this->request;

        return $this->view('mails.boq_request_approval', compact('req'));
    }
}
