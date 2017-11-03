<?php

namespace DelTesting;

use Del\Twig\DebugExtension;
use Twig_Environment;

class DebugExtensionTest extends \Codeception\TestCase\Test
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
	$stub = Stub::make(Twig_Environment::class, []);
        
	$ext = new DebugExtension();
	$this->assertEquals('breakpoint',$ext->getName());
	$this->assertCount(1, $ext->getFunctions());
	$ext->setBreakpoint($stub, []);
    }

}
