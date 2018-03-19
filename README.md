# Rotating log file in the Lumen framework.

## Installation

   `composer require pearl/lumen-log-rotate`

To add the log rotation functionality we will use a custom service provider to configure the log instance and specify the number of log files we should be keeping.

   - Add the service provider in bootstrap/app.php

`$app->register(Pearl\LumenLogRotate\LogRotateServiceProvider::class);`

## Custom settings(Env setting):

- To specify the number of log files we should be keeping.

  LOG_MAXFILE=3

- To Specify the log file path

  LOG_PATH=/path/log.log

  All the custom configuration should be add in .env file.