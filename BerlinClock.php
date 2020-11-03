<?php


class BerlinClock
{

    public function minutes(string $minutes) : string
    {
        if($minutes == 0) return "OOOO";
        if($minutes == 1) return "YOOO";
        if($minutes == 2) return "YYOO";
        if($minutes == 3) return "YYYO";
    }
}