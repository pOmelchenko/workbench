<?php 
class someTest extends \Codeception\Test\Unit
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
        $say = new \App\Example();

        $this->tester->assertEquals('Hello Pavel', $say->hello('Pavel'));
    }
}