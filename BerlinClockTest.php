<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $BerlinClock;
    protected function setUp(): void
    {
        parent::setUp();
        $this->BerlinClock = new BerlinClock();
    }

    //simple case
    public function test_minutes_given00_shouldReturnOOOO() {
        $actual = $this->BerlinClock->minutes("00");

        self::assertEquals("OOOO", $actual);
    }
    public function test_minutes_given01_shouldReturnYOOO() {
        $actual = $this->BerlinClock->minutes("01");

        self::assertEquals("YOOO", $actual);
    }
    public function test_minutes_given02_shouldReturnYYOO() {
        $actual = $this->BerlinClock->minutes("02");

        self::assertEquals("YYOO", $actual);
    }
    public function test_minutes_given03_shouldReturnYYYO() {
        $actual = $this->BerlinClock->minutes("03");

        self::assertEquals("YYYO", $actual);
    }
    public function test_minutes_given04_shouldReturnYYYY() {
        $actual = $this->BerlinClock->minutes("04");

        self::assertEquals("YYYY", $actual);
    }
    public function test_minutes_given05_shouldReturnYOOOOOOOOOO() {
        $actual = $this->BerlinClock->minutes("05");

        self::assertEquals("YOOOOOOOOOO", $actual);
    }
    public function test_minutes_given10_shouldReturnYYOOOOOOOOO() {
        $actual = $this->BerlinClock->minutes("10");

        self::assertEquals("YYOOOOOOOOO", $actual);
    }
    public function test_minutes_given15_shouldReturnYYROOOOOOOO() {
        $actual = $this->BerlinClock->minutes("15");

        self::assertEquals("YYROOOOOOOO", $actual);
    }
    public function test_hours_given00_shouldReturnOOOO() {
        $actual = $this->BerlinClock->hours("00");

        self::assertEquals("OOOO", $actual);
    }
    public function test_hours_given01_shouldReturnYOOO() {
        $actual = $this->BerlinClock->hours("01");

        self::assertEquals("YOOO", $actual);
    }
    public function test_hours_given02_shouldReturnYYOO() {
        $actual = $this->BerlinClock->hours("02");

        self::assertEquals("YYOO", $actual);
    }
    public function test_hours_given03_shouldReturnYYYO() {
        $actual = $this->BerlinClock->hours("03");

        self::assertEquals("YYYO", $actual);
    }
    public function test_hours_given04_shouldReturnYYYY() {
        $actual = $this->BerlinClock->hours("04");

        self::assertEquals("YYYY", $actual);
    }
    public function test_hours_given05_shouldReturnYOOO() {
        $actual = $this->BerlinClock->hours("05");

        self::assertEquals("YOOO", $actual);
    }
    public function test_hours_given10_shouldReturnYYOO() {
        $actual = $this->BerlinClock->hours("10");

        self::assertEquals("YYOO", $actual);
    }
    public function test_hours_given15_shouldReturnYYYO() {
        $actual = $this->BerlinClock->hours("15");

        self::assertEquals("YYYO", $actual);
    }
    public function test_hours_given20_shouldReturnYYYY() {
        $actual = $this->BerlinClock->hours("20");

        self::assertEquals("YYYY", $actual);
    }
    public function test_seconds_given00_shouldReturnR() {
        $actual = $this->BerlinClock->seconds("00");

        self::assertEquals("R", $actual);
    }
    public function test_seconds_given01_shouldReturnO() {
        $actual = $this->BerlinClock->seconds("01");

        self::assertEquals("O", $actual);
    }

    //complex case minutes

    public function test_minutes_given06_shouldReturnYOOO_YOOOOOOOOOO() {
        $actual = $this->BerlinClock->minutes("06");

        self::assertEquals("YOOOOOOOOOO YOOO", $actual);
    }

    public function test_minutes_given07_shouldReturnYOOOOOOOOOO_YYOO() {
        $actual = $this->BerlinClock->minutes("07");

       self::assertEquals("YOOOOOOOOOO YYOO", $actual);
    }

    public function test_minutes_given17_shouldReturnYYROOOOOOOO_YYOO() {
        $actual = $this->BerlinClock->minutes("17");

        self::assertEquals("YYROOOOOOOO YYOO", $actual);
    }
    public function test_minutes_given27_shouldReturnYYRYYOOOOOO_YYOO() {
        $actual = $this->BerlinClock->minutes("27");

        self::assertEquals("YYRYYOOOOOO YYOO", $actual);
    }
    public function test_minutes_given47_shouldReturnYYRYYRYYROO_YYOO() {
        $actual = $this->BerlinClock->minutes("47");

        self::assertEquals("YYRYYRYYROO YYOO", $actual);
    }
    ////complex case hours

    public function test_hours_given06_shouldReturnYOOO_YOOO() {
        $actual = $this->BerlinClock->hours("06");

        self::assertEquals("YOOO YOOO", $actual);
    }

    public function test_hours_given07_shouldReturnYOOO_YYOO() {
        $actual = $this->BerlinClock->hours("07");

        self::assertEquals("YOOO YYOO", $actual);
    }

    public function test_hours_given17_shouldReturnYYYO_YYOO() {
        $actual = $this->BerlinClock->hours("17");

        self::assertEquals("YYYO YYOO", $actual);
    }
    public function test_hours_given23_shouldReturnYYYY_YYYO() {
        $actual = $this->BerlinClock->hours("23");

        self::assertEquals("YYYY YYYO", $actual);
    }


    public function test_show_clock(){
        $actual = $this->BerlinClock->showClock("00","19","42");

        self::assertEquals(1,1);
        var_dump($actual);
    }








}
