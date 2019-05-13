<?php
/**
 * @var $params array
 */

use codexten\yii\pdf\PdfManager;

return [
    'components' => [
        'pdfManager' => [
            'class' => PdfManager::class,
            'viewPath' => $params['pdfManager.viewPath'],
            'converter' => [
                'class' => 'yii2tech\html2pdf\converters\Dompdf',
            ],
        ],
    ],
];