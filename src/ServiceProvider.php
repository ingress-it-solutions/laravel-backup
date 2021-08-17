<?php namespace Ingress\LaravelBackup;

use Ingress\LaravelBackup\Console\BackupCommand;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->commands([BackupCommand::class]);
    }

}