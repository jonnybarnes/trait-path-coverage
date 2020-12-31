<?php

namespace Tests;

use App\Bar;
use PHPUnit\Framework\TestCase;

class BarTest extends TestCase
{
    /** @test */
    public function traitMethodIsUsed()
    {
        $bar = new Bar();

        $this->assertTrue($bar->useTrait());
    }
}
