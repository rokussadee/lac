<?php

namespace App\Helpers;

use Carbon\Carbon;

class Helper
{
    public static function dateToString(Carbon $date)
    {
        $dateArray = array($date->shortEnglishDayOfWeek, $date->format('j F Y'));
        return implode(" ", $dateArray);
    }
}
