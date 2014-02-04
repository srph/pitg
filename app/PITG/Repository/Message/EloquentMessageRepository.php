<?php namespace PITG\Repository\Message;

use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\Message\MessageRepositoryInterface;

class EloquentMessageRepository extends EloquentBaseRepository  implements MessageRepositoryInterface {
	
	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $message;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct($message = null)
	{
		$this->message = $message;
	}
}