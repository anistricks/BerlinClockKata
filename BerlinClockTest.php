<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function test_minutes_given00_shouldReturnOOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("00");

        self::assertEquals("OOOO", $actual);
    }

}
