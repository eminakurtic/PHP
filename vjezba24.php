<?php

$current_date = Date ('m.d.Y');
$current_time = Date ('h');
$age = 25;
$name = 'John';

$gender = 'm';
$time = 'morning';
$time_message = " ";
$user_message = " ";

if($current_time >= 0 && $current_time <= 12){
    $time_message = 'morning';
}

if($current_time > 12 && $current_time <= 18){
    $time_message = 'afternoon';
}

if ($current_time > 18 && $current_time < 0){
    $time_message = 'evening';
}else{
    $time_message = 'day';
}


switch($gender){
    case 'm':
        $user_message = ( ($age < 18) ? 'boy' : 'man' );
    break;
    case 'f':
        $user_message = ( ($ag < 18) ? 'girl' : 'woman' );
    break;
    default:
        $user_message = 'someone';
    break;
}

echo "Good {$time_message} {$user_message}, " .  $name . " welcome to our site!<br>";
echo "Your age is " . $age . ".<br>";
echo "Current date: " . $current_date . "<br>";

//$broj = (3 < 5) ? 4 : 5;
//echo $broj;


// Ternarni operator
/**
 * Provjer uslov (a)
 * Uslov tačan - izvrši (b)
 * Uslov nije tačan - izvrši (c)
 * (a > 5) ? echo "A je veće od pet"; : echo "A nije veće pd pet";
 */