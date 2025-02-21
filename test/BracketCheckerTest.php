<?php

namespace BracketChecker\Tests;

use PHPUnit\Framework\TestCase;
use BracketChecker\BracketChecker;

class BracketCheckerTest extends TestCase
{
    public function validCases(): array
    {
        return [
            ['5*(4-2)'],
            [''],
            ['((()))'],
            ['()()()']
        ];
    }

    public function invalidCases(): array
    {
        return [
            ['5*((4-2)'],
            [')('],
            ['())'],
            ['(()']
        ];
    }

    /**
     * @dataProvider validCases
     */
    public function testValidCases(string $input): void
    {
        $this->assertTrue(BracketChecker::validate($input));
    }

    /**
     * @dataProvider invalidCases
     */
    public function testInvalidCases(string $input): void
    {
        $this->assertFalse(BracketChecker::validate($input));
    }
}