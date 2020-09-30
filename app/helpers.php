<?php
use Carbon\Carbon;

class Helpers {
    public static function getTimeOfDayString($name = '') : string
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

    public static function getDashboardLinks($name = '') : array
    {
        if (empty($name)) {
            throw new InvalidArgumentException('Name is empty. User must be logged in to access dashboard.');
        }

        return [
            ['uri' => '/markets', 'resource' => 'Markets'],
            ['uri' => '#0', 'resource' => 'Products'],
            ['uri' => '#0', 'resource' => 'Manage Stock'],
            ['uri' => '#0', 'resource' => 'Accounting & Sales'],
            ['uri' => '#0', 'resource' => $name]
        ];
    }
}