<?php
echo "Dates in PHP";
echo "<br>";
echo "<br>";
echo "Exercise 1";
echo "<br>";
$currentYear = date('Y');
echo "Expected Format : © ".$currentYear." PHP Exercises - CodeAcademy";

echo "<br>";
echo "<br>";
echo "Exercise 2";
echo "<br>";
$today = time();
$birthday = strtotime("1983-04-21");
$datebetween = ceil(abs($today-$birthday)/86400);
echo "There is $datebetween days from my birtday to today.";



echo "<br>";
echo "<br>";
echo "Exercise 3";
$currentDate = strtotime("September 01, 2020");
$formatOne = date("Y/ m /d", $currentDate);
$formatTwo = date("y. m. d", $currentDate);
$formatThree = date("d-m-y", $currentDate);
echo "<br>";
echo $formatOne;
echo "<br>";
echo $formatTwo;
echo "<br>";
echo $formatThree;


echo "<br>";
echo "<br>";
echo "Exercise 4";
echo "<br>";
$startdate = "1981-11-04";
$enddate = "2013-09-04";

$date_diff = abs(strtotime($enddate) - strtotime($startdate));

$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

echo "$years year, $months months, $days days";


echo "<br>";
echo "<br>";
echo "Exercise 5";
echo "<br>";

$sampledate = ("2020-09-12");
$str = strtotime($sampledate);
$newformat = date("d-m-Y", $str);
echo $newformat;



echo "<br>";
echo "<br>";
echo "Exercise 6";
echo "<br>";
echo "Exercise 4 + Function for calculating difference <br>";

function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
   
    $interval = date_diff($datetime1, $datetime2);
   
    return $interval->format($differenceFormat);
    
}

echo "<br>";
echo "<br>";
echo "Exercise 7";
echo "<br>";

$dateExample = ("21-04-2020");

$firstDay = date("01-m-Y", strtotime($dateExample));
$lastDay = date("t-m-Y", strtotime($dateExample));
echo "First day of April is $firstDay";
echo "<br>";
echo "Lastday of April is $lastDay";


echo "<br>";
echo "<br>";
echo "Exercise 8";
echo "<br>";
$dateEx = ("07-02-2015");
echo date('l \t\h\e jS', strtotime($dateEx));



echo "<br>";
echo "<br>";
echo "Exercise 9";
echo "<br>";
$convertTime = ("2020-09-07 10:30:00");
// 10:30am 7th of September (example)
echo date('g:i a  jS \o\f F', strtotime($convertTime));

echo "<br>";
echo "<br>";
echo "Exercise 10";
echo "<br>";

$a = ("19/05/2020, AM");
// output : 2020-05-19 09:00:00
 $newStr= chop($a, "AM");
 echo $newStr;
 $newDate =("19-05-2020");
 echo "<br>";
 echo date("Y-m-d 09:i:s", strtotime($newDate));


?>



