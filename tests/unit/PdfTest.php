<?php

use Codeception\Test\Unit;

class PdfTest extends Unit
{
    /**
     * @var UnitTester
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
        $this->assertTrue(Yii::$app->has('pdfManager'));
    }

    public function testSamplePdf()
    {
        $saveFile = $this->getOutputFilePath('sample-pdf.pdf');

        if (file_exists($saveFile)) {
            unlink($saveFile);
        }
        $this->assertTrue(
            Yii::$app->pdfManager
                ->convert(file_get_contents(Yii::getAlias('@codexten/yii/pdf/tests/_data/pdf/sample.html')))
                ->saveAs($saveFile)
        );
        $this->assertTrue(file_exists($saveFile), "{$saveFile} Not Found");
    }

    public function testRenderView()
    {
        $saveFile = $this->getOutputFilePath('invoice.pdf');

        if (file_exists($saveFile)) {
            unlink($saveFile);
        }
        $this->assertTrue(
            Yii::$app->pdfManager
                ->render('invoice', ['name' => 'John'])
                ->saveAs($saveFile)
        );
        $this->assertTrue(file_exists($saveFile), "{$saveFile} Not Found");
    }

    protected function getOutputFilePath($fileName)
    {
        return Yii::getAlias("@runtime/{$fileName}");
    }

}