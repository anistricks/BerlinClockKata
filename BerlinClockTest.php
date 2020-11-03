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
    public function test_minutes_given03_shouldReturnYYYO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("03");

        self::assertEquals("YYYO", $actual);
    }
    public function test_minutes_given04_shouldReturnYYYY() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("04");

        self::assertEquals("YYYY", $actual);
    }
    public function test_minutes_given05_shouldReturnYOOOOOOOOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("05");

        self::assertEquals("YOOOOOOOOOO", $actual);
    }
    public function test_minutes_given10_shouldReturnYYOOOOOOOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("10");

        self::assertEquals("YYOOOOOOOOO", $actual);
    }
    public function test_minutes_given15_shouldReturnYYROOOOOOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("15");

        self::assertEquals("YYROOOOOOOO", $actual);
    }
    public function test_hours_given00_shouldReturnOOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("00");

        self::assertEquals("OOOO", $actual);
    }
    public function test_hours_given01_shouldReturnYOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("01");

        self::assertEquals("YOOO", $actual);
    }



}
