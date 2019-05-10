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
//        $pdf = new \codexten\yii\pdf\Pdf();
//        $this->assertTrue($pdf->test());
//        $this->assertFalse($pdf->test());

    }

    public function testAlice()
    {
        $loader = new Nelmio\Alice\Loader\NativeLoader();
        $objectSet = $loader->loadData([
            stdClass::class => [
                'user{1..10}' => [
                    'name' => '<username()>',
                    'fullname' => '<firstName()> <lastName()>',
                    'birthDate' => '<date_create()>',
                    'email' => '<email()>',
                    'favoriteNumber' => '50%? <numberBetween(1, 200)>',
                ],
            ],
        ])->getObjects();
        foreach ($objectSet as $object) {
            echo '<pre>';
            var_dump($object);
            echo '</pre>';
        }
        exit;

    }
}