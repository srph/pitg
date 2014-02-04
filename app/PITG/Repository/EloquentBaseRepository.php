<?php

abstract class EloquentBaseRepository {
	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct($model = null)
	{
		$this->model = $model;
	}

	/**
	 * Return all data handled by the model
	 *
	 * @return 	mixed
	 */
	public function all()
	{
		return $this->model->all();
	}

	/**
	 * Create a new resource of this model
	 *
	 * @param 	array 		$data
	 * @return 	boolean
	 */
	public function create(array $data)
	{
		$model = $this->model->create($data);

		return ($model)
			? true
			: false;
	}
}