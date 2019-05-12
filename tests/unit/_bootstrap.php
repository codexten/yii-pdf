<?php

use hiqdev\composer\config\Builder;
use yii\console\Application;

if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', getcwd());
}


if (!defined('VENDOR_DIR')) {
    foreach ([ROOT_DIR . '/vendor'] as $dir) {
        if (file_exists($dir . '/autoload.php')) {
            define('VENDOR_DIR', $dir);
            break;
        }
    }
}

require_once(ROOT_DIR . '/vendor/autoload.php');
require_once(ROOT_DIR . '/vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@root', ROOT_DIR);
Yii::setAlias('@vendor', VENDOR_DIR);

hiqdev\composer\config\Builder::rebuild();

$config = require Builder::path('testPdf');

$app = new Application($config);

//if (!defined('ROOT_DIR')) {
//    define('ROOT_DIR', getcwd());
//}
//
//use hiqdev\composer\config\Builder;
//use yii\console\Application;
//
//$bootstrap = ROOT_DIR . '/vendor/codexten/yii-core/src/config/bootstrap.php';
//
//
//if (YII_ENV === 'dev') {
//    hiqdev\composer\config\Builder::rebuild();
//}
//
//$config = require Builder::path('testPdf');
//
//(new Application($config));