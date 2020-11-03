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
        if($minutes == 15) return "YYROOOOOOOO";


    }

    public function hours(string $hours) : string
    {
        if($hours == 0) return "OOOO";
        if($hours == 1) return "YOOO";
    }
}