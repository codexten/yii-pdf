<?php

class PdfTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testGetProperty()
    {
        $this->assertTrue(Yii::$app->has('html2pdf'));
    }

    public function testSamplePdf()
    {
        $html = <<<HTML
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<p>Simple Pdf Test</p>
</body>
</html>
HTML;
        $saveFile = __DIR__ . '/../_output/samplePdf.pdf';
        if (file_exists($saveFile)) {
            unlink($saveFile);
        }

        $this->assertTrue(Yii::$app->html2pdf
            ->convert($html)
            ->saveAs($saveFile));

        $this->assertTrue(file_exists($saveFile),"{$saveFile} Not Found");

// convert HTML file to PDF file :
//        Yii::$app->html2pdf
//            ->convertFile('/path/to/source.html')
//            ->saveAs('/path/to/output.pdf');
    }

}