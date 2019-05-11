<?php

return [
    'components' => [
        'html2pdf' => [
            'class' => 'yii2tech\html2pdf\Manager',
            'viewPath' => '@app/pdf',
            'converter' => 'wkhtmltopdf',
        ],
    ],
];