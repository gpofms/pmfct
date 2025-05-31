<?php
use Carbon\Carbon;

/**
 * Convert current date to default d/m/Y format
 */
function date_to_format($date, $format = 'd/m/Y')
{

    $date = !empty($date) ? Carbon::parse($date)->format($format) : '-';

    return $date;
}

/**
 * Convert number to display in money format followed by Indian style money system
 */
function number_to_format($amount, $decimalPoints = 2)
{
    //$fmt = new \NumberFormatter($locale = 'en_IN', NumberFormatter::DECIMAL);
    $fmt = new \NumberFormatter($locale = 'en_IN', $decimalPoints);
    $amount = $fmt->format($amount);
    $amount = str_replace('₹', '', $amount); //uncomment this line if you want to add rupee symbol
    return $amount;
}

?>