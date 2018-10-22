<?php

declare(strict_types=1);

srand(mktime(0, 0, 0));
$time = rand( 0, time() );

function randomDate(string $start_date, string $end_date): string
{
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('d F Y H:i:s', $val);
}

// function date() 
// {
//   echo date("d F Y H:i:s", filemtime(__DIR__.'/content/article01.txt'));
// };
