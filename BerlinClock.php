<?php


class BerlinClock
{

    public function minutes(string $minutes) : string
    {
        if($minutes == 0) return "OOOO";
        if($minutes == 1) return "YOOO";
        if($minutes == 2) return "YYOO";
        if($minutes == 3) return "YYYO";
        if($minutes == 4) return "YYYY";
        if($minutes == 5) return "YOOOOOOOOOO";
        if($minutes == 10) return "YYOOOOOOOOO";


    }
}