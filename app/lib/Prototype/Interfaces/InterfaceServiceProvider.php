<?php

namespace Prototype\Interfaces;

use Illuminate\Support\ServiceProvider;

class InterfaceServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('Prototype\Interfaces\UserRepository', function($app){
        	return new \Prototype\DBClasses\Eloquent\EloquentUserRepository(new \User, new \Role);
        });

        $this->app->bind('Prototype\Interfaces\RequestRepository', function($app){
            return new \Prototype\DBClasses\Eloquent\EloquentRequestRepository(new \RequestModel);
        });
    }
}