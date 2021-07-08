<?php

namespace Tests;

use think\facade\Event;

class FeatureTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        //Event::fake();
    }

    public function test_basic_features()
    {
        $this->assertTrue(true);
    }
}
