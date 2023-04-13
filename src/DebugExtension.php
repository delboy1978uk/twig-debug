<?php

namespace Del\Twig;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class DebugExtension extends AbstractExtension
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
        return [
            new TwigFunction('breakpoint', [$this, 'setBreakpoint'], ['needs_environment' => true, 'needs_context' => true]),
        ];
    }

    /**
     * pause the code!
     * @param Environment $environment
     * @param $context
     */
    public function setBreakpoint(Environment $environment, $context)
    {
        if (function_exists('xdebug_break')) {
            xdebug_break();
        }
    }
}
