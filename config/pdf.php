<?php
/**
 * @var $params array
 */

use codexten\yii\pdf\PdfManager;
use yii2tech\html2pdf\converters\Tcpdf;

return [
    'components' => [
        'pdfManager' => [
            'class' => PdfManager::class,
            'viewPath' => $params['pdfManager.viewPath'],
            'converter' => [
                'class' => Tcpdf::class,
            ],
        ],
    ],
];