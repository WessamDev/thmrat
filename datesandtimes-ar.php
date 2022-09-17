<?php

// PHP Arabic Date

error_reporting(E_ALL ^ E_NOTICE);

$months = array(
    "Jan" => "يناير",
    "Feb" => "فبراير",
    "Mar" => "مارس",
    "Apr" => "أبريل",
    "May" => "مايو",
    "Jun" => "يونيو",
    "Jul" => "يوليو",
    "Aug" => "أغسطس",
    "Sep" => "سبتمبر",
    "Oct" => "أكتوبر",
    "Nov" => "نوفمبر",
    "Dec" => "ديسمبر"
);

$your_date = date('d-m-y'); // The Current Date

$en_month = date("M", strtotime($your_date));

foreach ($months as $en => $ar) {
    if ($en == $en_month) {
        $ar_month = $ar;
    }
}

$find = array (

    "Sat",
    "Sun",
    "Mon",
    "Tue",
    "Wed" ,
    "Thu",
    "Fri"

);

$replace = array (

    "السبت",
    "الأحد",
    "الإثنين",
    "الثلاثاء",
    "الأربعاء",
    "الخميس",
    "الجمعة"

);

$ar_day_format = date('D'); // The Current Day

$ar_day = str_replace($find, $replace, $ar_day_format);


header('Content-Type: text/html; charset=utf-8');
$standard = array("0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
$eastern_arabic_symbols = array("","٠","١","٢","٣","٤","٥","٦","٧","٨","٩");
$current_date = $ar_day.' '.date('d').' / '.$ar_month.' / '.date('Y');
$arabic_date = str_replace($standard , $eastern_arabic_symbols , $current_date);

// Echo Out the Date
echo $arabic_date;

?>

