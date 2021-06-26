<?php

use PHPUnit\Framework\TestCase;

final class HelperTest extends TestCase
{
    protected function setUp(): void
    {
    }

    public function testTestIncomplete(): void
    {
        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}