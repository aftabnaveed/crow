<?php

namespace Tests\Unit\Crow;

use Crow\DefaultHeaders;
use PHPUnit\Framework\TestCase;

class DefaultHeadersTest extends TestCase
{

    public function testIfHasServerKey()
    {
        $this->assertArrayHasKey('Server',
            DefaultHeaders::get()
        );

        $this->assertEquals('CrowPHP/1',
            DefaultHeaders::get()["Server"]
        );
    }
}