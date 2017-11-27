<?php

namespace Del\Twig;

use Twig_Environment;
use Twig_Extension;
use Twig_SimpleFunction;

class DebugExtension extends Twig_Extension
{
    /**
     * @return string
     */
    public function getName() 
    {
        return 'breakpoint';
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('breakpoint', [$this, 'setBreakpoint'], ['needs_environment' => true, 'needs_context' => true]),
        );
    }

    /**
     * pause the code!
     * @param Twig_Environment $environment
     * @param $context
     */
    public function setBreakpoint(Twig_Environment $environment, $context)
    {
        if (function_exists('xdebug_break')) {
            xdebug_break();
        }
    }
}
