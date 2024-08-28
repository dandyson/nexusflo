<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // Run tests without Vite
    protected function setUp(): void
    {
         parent::setUp();

        $this->withoutVite();
    }
}
