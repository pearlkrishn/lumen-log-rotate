# Rotating log file in the Lumen framework.

## Installation

   `composer require pearl/lumen-log-rotate`

To add the log rotation functionality we will use a custom service provider to configure the log instance and specify the number of log files we should be keeping.

   - Add the service provider in bootstrap/app.php

`$app->register(Pearl\LumenLogRotate\LogRotateServiceProvider::class);`

## Custom Options:

- To specify the number of log files we should be keeping. Default value is 5.

  LOG_MAXFILE=3

- To Specify the log file path. Default log path is storage/logs/lumen.log

  LOG_PATH=/path/log.log

  All the custom configuration should be add in .env file.


## Logs folder view :

    lumen-2018-03-19.log
    lumen-2018-03-20.log
    lumen-2018-03-21.log
    lumen-2018-03-22.log
    lumen-2018-03-23.log