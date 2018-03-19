<?php

namespace Pearl\LumenLogRotate;

use Monolog\Formatter\LineFormatter;
use Illuminate\Support\ServiceProvider;
use Monolog\Handler\RotatingFileHandler;

class LogRotateServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $handlers[] = (new RotatingFileHandler(env('LOG_PATH', storage_path('logs/lumen.log')), env('LOG_MAXFILE', 5)))
            ->setFormatter(new LineFormatter(null, null, true, true));

        $this->app['log']->setHandlers($handlers);
    }
}
