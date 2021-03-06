<?php namespace PITG\Repository\Thread;

use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\Thread\ThreadRepositoryInterface;
use PITG\Repository\Hit\HitRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EloquentThreadRepository extends EloquentBaseRepository implements ThreadRepositoryInterface {

	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $thread;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct(
		Model $thread,
		HitRepositoryInterface $hit)
	{
		parent::__construct($thread);
		$this->thread = $thread;
		$this->hit = $hit;
	}

	/**
	 * Fetch a thread with the requested ID
	 *
	 * @return 	mixed
	 */
	public function byId($id)
	{
		$thread = $this->model
			->where('id', '=', $id)
			->first();

		return $thread;
	}

	/**
	 * Fetch threads according to hits
	 * and its date posted
	 *
	 * @return 	mixed
	 */
	public function getHot()
	{
		// Add the frequency / number of posts too..
		$thread = $this->thread
			->where('updated_at', '>', strtotime('-1 week', strtotime(date('Y-m-d H:i:s'))))
			->orderBy('hits', 'desc')
			->orderBy('id', 'desc')
			->get();

		return $thread;
	}

	/**
	 * Fetch the latest threads
	 *
	 * @return 	mixed
	 */
	public function getRecent()
	{
		$thread = $this->thread
			->orderBy('id', 'desc')
			->get();

		return $thread;
	}

	/**
	 * Increment thread's hits
	 *
	 * @param 	Thread 	$thread
	 * @param 	string 	$client
	 * @param 	User 	$user_id
	 * @return 	boolean
	 */
	public function incrementHits($thread, $client, $user_id)
	{
		$thread_id = $thread->id;

		$hit = $this->hit;
		if($hit->validate($thread, $client, $user_id)) {
			$client = @inet_pton($client);
			$hit_logged = $hit->create(array(
				'ip_address'=>	$client,
				'thread_id'	=>	$thread_id,
				'user_id'	=>	$user_id
			));

			$thread->hits++;

			if($hit_logged && $thread->save()) {
				return true;
			}
		}

		return false;
	}

	/**
	 * Get the last stored record
	 *
	 * @return 	mixed
	 */
	public function getLast()
	{
		$thread = $this->thread
			->orderBy('id', 'desc')
			->first();

		return $thread;
	}

	/**
	 * Store the newly submitted thread
	 *
	 * @param 	array 		$data
	 * @return 	boolean
	 */
	public function post($data)
	{
		if(!empty($data)) {

			if($this->thread->create($data)) {
				$thread = $this->byId($this->getLast()->id);			
				$tags = explode(',', $data['tags']);

				foreach($tags as $tag) {
					$thread->tags()->attach(1);
				}

				return true;
			}
		}

		return false;
	}

}