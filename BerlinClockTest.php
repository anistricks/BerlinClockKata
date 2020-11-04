<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    //simple case
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
    public function test_hours_given02_shouldReturnYYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("02");

        self::assertEquals("YYOO", $actual);
    }
    public function test_hours_given03_shouldReturnYYYO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("03");

        self::assertEquals("YYYO", $actual);
    }
    public function test_hours_given04_shouldReturnYYYY() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("04");

        self::assertEquals("YYYY", $actual);
    }
    public function test_hours_given05_shouldReturnYOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("05");

        self::assertEquals("YOOO", $actual);
    }
    public function test_hours_given10_shouldReturnYYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("10");

        self::assertEquals("YYOO", $actual);
    }
    public function test_hours_given15_shouldReturnYYYO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("15");

        self::assertEquals("YYYO", $actual);
    }
    public function test_hours_given20_shouldReturnYYYY() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("20");

        self::assertEquals("YYYY", $actual);
    }
    public function test_seconds_given00_shouldReturnR() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->seconds("00");

        self::assertEquals("R", $actual);
    }
    public function test_seconds_given01_shouldReturnO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->seconds("01");

        self::assertEquals("O", $actual);
    }

    //complex case minutes

    public function test_minutes_given06_shouldReturnYOOO_YOOOOOOOOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("06");

        self::assertEquals("YOOOOOOOOOO YOOO", $actual);
    }

    public function test_minutes_given07_shouldReturnYOOOOOOOOOO_YYOO() {
        $BerlinClock = new BerlinClock();

       $actual = $BerlinClock->minutes("07");

       self::assertEquals("YOOOOOOOOOO YYOO", $actual);
    }

    public function test_minutes_given17_shouldReturnYYROOOOOOOO_YYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("17");

        self::assertEquals("YYROOOOOOOO YYOO", $actual);
    }
    public function test_minutes_given27_shouldReturnYYRYYOOOOOO_YYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("27");

        self::assertEquals("YYRYYOOOOOO YYOO", $actual);
    }
    public function test_minutes_given47_shouldReturnYYRYYRYYROO_YYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutes("47");

        self::assertEquals("YYRYYRYYROO YYOO", $actual);
    }
    ////complex case hours

    public function test_hours_given06_shouldReturnYOOO_YOOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("06");

        self::assertEquals("YOOO YOOO", $actual);
    }

    public function test_hours_given07_shouldReturnYOOO_YYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("07");

        self::assertEquals("YOOO YYOO", $actual);
    }

    public function test_hours_given17_shouldReturnYYYO_YYOO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("17");

        self::assertEquals("YYYO YYOO", $actual);
    }
    public function test_hours_given23_shouldReturnYYYY_YYYO() {
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->hours("23");

        self::assertEquals("YYYY YYYO", $actual);
    }







}
