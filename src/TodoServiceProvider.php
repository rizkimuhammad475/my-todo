<?php

namespace Amitav\Todo;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class TodoServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('todo', function($app){
			return new Todo;
		});
	}

	public function boot()
	{
		// loading routes file
		require __DIR__ . '/Http/routes.php';

		$this->loadViewsFrom(__DIR__.'/../views','todo');

		$this->publishes([
			__DIR__.'/migrations/2015_07_25_000000_create_todo_table.php' => base_path('database/migrations/2015_07_25_000000_create_todo_table.php'),
		]);
	}
}