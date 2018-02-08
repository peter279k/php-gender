<?php

namespace Peter;

use PHPUnit\Framework\TestCase;

class CheckGenderTest extends TestCase
{
    public function testGender()
    {
        $gender = new CheckGender(15);
        $this->assertFalse($gender->check());

        $gender = new CheckGender(20);
        $this->assertTrue($gender->check());
    }
}