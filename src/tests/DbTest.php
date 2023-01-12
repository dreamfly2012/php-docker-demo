<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class DbTest extends TestCase
{
    public function testTrueAssetsToTrue()
    {
        $condition = true;
        $this->assertTrue($condition);
    }
}
