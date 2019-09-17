<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CandidateServiceInterface;
use App\Services\CandidateService;

class CandidateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app-> singleton(CandidateServiceInterface::class, CandidateService::class);
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
