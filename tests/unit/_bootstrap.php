<?php

if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', getcwd());
}

use hiqdev\composer\config\Builder;
use yii\console\Application;

require ROOT_DIR . '/config/bootstrap.php';


if (YII_ENV === 'dev') {
    hiqdev\composer\config\Builder::rebuild();
}

$config = require Builder::path('testPdf');

(new Application($config));