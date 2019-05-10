<?php

class ExampleTest extends \Codeception\Test\Unit
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

    // tests
    public function testSomeFeature()
    {

    }

    public function testAnother()
    {
        $pdf = new \codexten\yii\pdf\Pdf();
        $this->assertTrue($pdf->test());
        $this->assertFalse($pdf->test());

    }
}