<?php


class BerlinClock
{

    public function minutes(string $minutes): string
    {
        /*version1 minutes
        if($minutes == 0) return "OOOO";
        if($minutes == 1) return "YOOO";
        if($minutes == 2) return "YYOO";
        if($minutes == 3) return "YYYO";
        if($minutes == 4) return "YYYY";
        */
        /* version1 5minutes
        if($minutes == 5) return "YOOOOOOOOOO";
        if($minutes == 10) return "YYOOOOOOOOO";
        if($minutes == 15) return "YYROOOOOOOO";
        */
         // global version

       $single=$this->singleMinutes($minutes);
       $couple=$this->coupleMinutes($minutes);
        if ($minutes < "05") {

            return $single;
        }
        if($minutes >"04" && $minutes%5==0){
            return $couple;
    }else{
            return $couple." ".$single;
        }
    }
    public function hours(string $hours) : string
    {

        /* version 1 1 hours
        if($hours == 0) return "OOOO";
        if($hours == 1) return "YOOO";
        if($hours == 2) return "YYOO";
        if($hours == 3) return "YYYO";
        if($hours == 4) return "YYYY";
        */
       /* version 1  5hours
       if($hours == 5) return "YOOO";
        if($hours == 10) return "YYOO";
        if($hours == 15) return "YYYO";
        if($hours == 20) return "YYYY";
       */
        //version 2 mix

        $singleHours=$this->singleHours($hours);
        $coupleHours=$this->coupleHours($hours);
        if($hours < "05"){
            return $singleHours;

        }if($hours > "04"  && $hours%5==0) {
        return $coupleHours;
    }else{
        return $coupleHours." ".$singleHours;
    }


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

    /**
     * @param string $minutes
     * @return string
     */
    public function coupleMinutes(string $minutes): string
    {
        $coupleMinutes = "";
        $color1 = $minutes / 5;

            for ($i = 1; $i <= 11; $i++) {
                if ($i%3==0 && $i <= $color1 ) {
                    $coupleMinutes = $coupleMinutes . "R";
                } else if ($i <= $color1 && !$i%3== 0) {
                    $coupleMinutes = $coupleMinutes . "Y";
                } else if ($i > $color1) {
                    $coupleMinutes = $coupleMinutes . "O";
                }
            }
            return $coupleMinutes;
    }

    /**
     * @param string $minutes
     * @return string
     */
    public function singleMinutes(string $minutes): string
    {

            $singleMinutes = "";
            $color2 = $minutes % 5;
            for ($i = 1; $i <= 4; $i++) {

                if ($i <= $color2) {
                    $singleMinutes = $singleMinutes . "Y";
                } else {
                    $singleMinutes = $singleMinutes . "O";
                }
            }
            return $singleMinutes;
    }

    /**
     * @param string $hours
     * @return string
     */
    public function singleHours(string $hours): string
    {
        $singleHours = "";
        $color1 = $hours % 5;
        for ($i = 1; $i <= 4; $i++) {
            if ($i <= $color1) {
                $singleHours = $singleHours . "Y";
            } else {
                $singleHours = $singleHours . "O";
            }
        }
        return $singleHours;
    }

    /**
     * @param string $hours
     * @return string
     */
    public function coupleHours(string $hours): string
    {
        $coupleHours = "";
        $color = $hours / 5;
        $yellow = "Y";
        $off = "O";
        for ($i = 1; $i <= 4; $i++) {
            if ($i <= $color) {
                $coupleHours = $coupleHours . "Y";
            } else {
                $coupleHours = $coupleHours . "O";
            }

        }
        return $coupleHours;
    }

}