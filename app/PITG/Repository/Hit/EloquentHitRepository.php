<?php namespace PITG\Repository\Hit;

use DateTime;
use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\Hit\HitRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EloquentHitRepository extends EloquentBaseRepository implements HitRepositoryInterface {

	/**
	 * Eloquent model
	 *
	 * @var 	Illuminate\Database\Eloquent\Model
	 * @access 	protected
	 */
	protected $hit;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct(Model $hit)
	{
		parent::__construct($hit);
		$this->hit = $hit;
	}

	/**
	 * Validate if the hit counts
	 *
	 * @param 	Thread 	$thread
	 * @param 	string 	$client
	 * @param 	User 	$user
	 * @return 	boolean
	 */
	public function validate($thread = null, $client = null, $user_id = null)
	{
		if(!empty($client) && !empty($user_id)) {
			// Grab the latest log from the client ip
			$client = @inet_pton($client);
			$hit = $this->model
				->where('thread_id', '=', $thread->id)
				->where('ip_address', '=', $client)
				->where('user_id', '=', $user_id)
				->orderBy('id', 'desc')
				->first();

			$valid = true;
			if(!empty($hit)) {
				$lastLog = new DateTime($hit->created_at);
				$newLog = new DateTime(date('Y-m-d H:i:s'));
				$interval = $lastLog->diff($newLog);
				
				if($interval->d < 1) {
					$valid = false;
				}
			}

			if($valid) return true;

		}

		return false;
	}
}