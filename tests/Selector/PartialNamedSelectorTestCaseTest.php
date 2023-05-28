<?php

namespace Behat\Mink\Tests\Selector;

use Behat\Mink\Selector\PartialNamedSelector;

class PartialNamedSelectorTestCaseTest extends NamedSelectorTestCase
{
    protected function getSelector()
    {
        return new PartialNamedSelector();
    }

    protected function allowPartialMatch()
    {
        return true;
    }
}
