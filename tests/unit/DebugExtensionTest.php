<?php

namespace DelTesting;

use Codeception\TestCase\Test;
use Codeception\Util\Stub;
use Del\Twig\DebugExtension;
use Twig\Environment;

class DebugExtensionTest extends Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    /**
     * Check tests are working
     */
    public function testBlah()
    {
	$stub = Stub::make(Environment::class, []);
        
	$ext = new DebugExtension();
	$this->assertEquals('breakpoint',$ext->getName());
	$this->assertCount(1, $ext->getFunctions());
	$ext->setBreakpoint($stub, []);
    }

}
