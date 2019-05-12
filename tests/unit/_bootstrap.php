<?php

use hiqdev\composer\config\Builder;

if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', getcwd());
}

require_once(ROOT_DIR . '/vendor/autoload.php');
require_once(ROOT_DIR . '/vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@root', ROOT_DIR);
Yii::setAlias('@vendor', VENDOR_DIR);

hiqdev\composer\config\Builder::rebuild();

$config = require Builder::path('testPdf');

$app = new \yii\console\Application($config);

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