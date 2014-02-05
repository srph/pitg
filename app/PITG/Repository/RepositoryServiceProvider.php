<?php namespace PITG\Repository;

use User;
use Thread;
use Illuminate\Support\ServiceProvider;
use PITG\Repository\User\EloquentUserRepository;
use PITG\Repository\Profile\EloquentProfileRepository;
use PITG\Repository\Category\EloquentCategoryRepository;
use PITG\Repository\Thread\EloquentThreadRepository;
use PITG\Repository\Post\EloquentPostRepository;
use PITG\Repository\Message\EloquentMessageRepository;
use PITG\Repository\Hits\EloquentHitsRepository;

class RepositoryServiceProvider extends ServiceProvider {

	/**
	 * Register the repositories
	 *
	 * @return 	void
	 */
	public function register()
	{
		$app = $this->app;

		/* Users */
		$app->bind('PITG\Repository\User\UserRepositoryInterface', function() {
			return new EloquentUserRepository(new User);
		});

		/* Thread */
		$app->bind('PITG\Repository\Thread\ThreadRepositoryInterface', function() {
			return new EloquentThreadRepository(new Thread);
		});

		/* Post */
		$app->bind('PITG\Repository\Post\PostRepositoryInterface', function() {
			return new EloquentPostRepository(new Post);
		});

		/* Message */
		$app->bind('PITG\Repository\Message\MessageRepositoryInterface', function() {
			return new EloquentMessageRepository(new Message);
		});

		/* Category */
		$app->bind('PITG\Repository\Category\CategoryRepositoryInterface', function() {
			return new EloquentCategoryRepository(new Category);
		});

		/* Hits */
		$app->bind('PITG\Repository\Hits\HitsRepositoryInterface', function() {
			return new EloquentHitsRepository(new Hits);
		});
	}
}