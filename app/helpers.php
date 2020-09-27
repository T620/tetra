<?php
use Carbon\Carbon;

class Helpers {
    public static function getTimeOfDayString($name = '') :string
    {
        if (empty($name)) {
            throw new InvalidArgumentException('Name is empty. Please provide a name');
        }

        $dt = Carbon::now();
        
        $hour = $dt->hour;
        
        if ($hour < 12) {
            $timeOfDay = 'Morning';
        } else if ($hour >= 12 && $hour <= 17) {
            $timeOfDay = 'Afternoon';
        } else {
            $timeOfDay = 'Evening';
        }

        return "Good {$timeOfDay}, {$name}"; 
    }
}