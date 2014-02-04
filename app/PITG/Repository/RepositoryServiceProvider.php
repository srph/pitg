<?php namespace PITG\Repository;

use User;
use Thread;
use Illuminate\Support\ServiceProvider;
use PITG\Repository\Thread\EloquentUserRepository;
use PITG\Repository\Thread\EloquentProfileRepository;
use PITG\Repository\Thread\EloquentCategoryRepository;
use PITG\Repository\Thread\EloquentThreadRepository;
use PITG\Repository\Thread\EloquentPostRepository;
use PITG\Repository\Thread\EloquentMessageRepository;

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
	}
}