<?php

namespace App\Providers;
use App\Repositories\TutorRepository;
use App\Repositories\Interfaces\TutorRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TutorRepositoryInterface::class, 
            TutorRepository::class
        );
    }
}
