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
        if($hours == 2) return "YYOO";
        if($hours == 3) return "YYYO";
        if($hours == 4) return "YYYY";
       /* version 1 if($hours == 5) return "YOOO";
        if($hours == 10) return "YYOO";
        if($hours == 15) return "YYYO";
        if($hours == 20) return "YYYY";
       */
        $coupleHours="";
        $color= $hours / 5 ;
        $yellow="Y";
        $off="O";
        for ($i = 1; $i <= 4; $i++) {
                if ($i <= $color) {
                    $coupleHours=$coupleHours."Y";
                } else {
                    $coupleHours=$coupleHours."O";
                }

            }
        return $coupleHours;

        // version 2

    }

    public function seconds(string $seconds) : string
    {    /* version 1 the even seconds 0 and the odd seconds 1
        if($seconds == 0) return "R";
        if($seconds == 1) return "O";
    */
        //version 2 all the seconds even and odd
        if($seconds % 2 == 0) {
            return "R";
        }else{
            return "O";
        }
    }


}