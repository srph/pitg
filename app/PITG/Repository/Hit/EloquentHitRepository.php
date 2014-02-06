<?php namespace PITG\Repository\Hit;

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
		$this->hits = $hit;
	}

	public function validate($thread, $client = null, $user = null)
	{
		if(!empty($client) && !empty($user)) {
			// Grab the latest log from the client ip
			$hit = $this->model
				->where('ip', '=', $client)
				->orderBy('id', 'desc')
				->first();

			$lastLog = new DateTime($hit->created_at);
			$oneDay = $lastLog->modify('+1 day');

			if(!empty($hit) || $lastLog > $oneDay) {
				return true;
			}
		}

		return false;
	}

	public function increment($thread = null, $client = null, $user = null)
	{
		if($this->validate($thread, $client, $user)) {
			$hit_logged = $this->model->create(array(
				'ip'		=>	$client,
				'user_id'	=>	$user->id
			));

			if($hit_logged) {
				return true;
			}
		}

		return false;
	}
}