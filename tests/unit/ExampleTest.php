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
            \Nelmio\Entity\User::class => [
                'user{1..10}' => [
                    'username' => '<username()>',
                    'fullname' => '<firstName()> <lastName()>',
                    'birthDate' => '<date_create()>',
                    'email' => '<email()>',
                    'favoriteNumber' => '50%? <numberBetween(1, 200)>',
                ],
            ],
            \Nelmio\Entity\Group::class => [
                'group1' => [
                    'name' => 'Admins',
                    'owner' => '@user1',
                    'members' => '<numberBetween(1, 10)>x @user*',
                    'created' => '<dateTimeBetween("-200 days", "now")>',
                    'updated' => '<dateTimeBetween($created, "now")>',
                ],
            ],
        ]);

    }
}