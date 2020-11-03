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
    public function test_minutes_given01_shouldReturnYOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("01");

        self::assertEquals("YOOO", $actual);
    }
    public function test_minutes_given02_shouldReturnYYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("02");

        self::assertEquals("YYOO", $actual);
    }

}
