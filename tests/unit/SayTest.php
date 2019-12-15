<?php namespace Tests;

use App\Say;
use Codeception\Test\Unit;

class SayTest extends Unit
{
    protected UnitTester $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testSomeFeature(): void
    {
        $name = 'pavel';

        $this->assertEquals(
            sprintf('Hello %s', ucfirst($name)),
            (new Say())->hello($name)
        );
    }
}