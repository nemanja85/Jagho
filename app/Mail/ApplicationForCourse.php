<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationForCourse extends Mailable {
	use Queueable, SerializesModels;
	public $message;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($message) {
		$this->message = $message;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		//if (null != $this->message['owner']) {
		//	dd($this->message);
		return $this->markdown('emails.owner');
		//}
		//return $this->markdown('emails.success');
	}
}
