<?php

use yii\web\View;
use yii2tech\html2pdf\Template;

/* @var $this View */
/* @var $context Template */

$context = $this->context;

//$context->layouts = 'layouts/payment'; // use specific layouts for this template

// specify particular PDF conversion for this template:
$context->pdfOptions = [
    'pageSize' => 'A4',
    // ...
];
?>
<h1>Invoice</h1>
<p>For: <?= $name ?></p>