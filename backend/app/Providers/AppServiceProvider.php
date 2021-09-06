<?php

namespace App\Providers;

use App\Repository\Answer\AnswerRepository;
use App\Repository\Answer\AnswerRepositoryInterface;
use App\Repository\Question\QuestionRepository;
use App\Repository\Question\QuestionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repository\Answer\AnswerRepositoryInterface',
            'App\Repository\Answer\AnswerRepository',
        );

        $this->app->bind(
            'App\Repository\Question\QuestionRepositoryInterface',
            'App\Repository\Question\QuestionRepository',
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
