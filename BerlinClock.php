<?php


class BerlinClock
{

    public function minutes(string $minutes) : string
    {
        if($minutes == 0) return "OOOO";
        if($minutes == 1) return "YOOO";
    }
}