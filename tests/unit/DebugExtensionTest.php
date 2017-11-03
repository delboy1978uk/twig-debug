<?php

namespace DelTesting;

use Del\Twig\DebugExtension;

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
	$ext = new DebugExtension();
	//$this->assertEquals('Ready to start building tests',$this->blank->blah());
    }

}
