<?php 
echo "<b>Exercise 1</b> If you have an array a = [0, 1, 2, 3, 4 ];`, how do you extract(display) the value 3 from the array? ";
$a=array(0,1,2,3,4);
echo "<br>";
echo $a[3];
echo "<br>";
$athree=$a[3];
var_dump($athree);


echo "<b>Exercise 2</b> If you have an array  how do you extract(show) the value 3 from the array?";
$ab = array("zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4);
echo "<br>";
echo $ab["three"]. "<br>";
$abthree=$ab["three"];
var_dump($abthree);

echo "<b>Exercise 3</b>  If you have the following array, how do you extract the value 3 from the array?";
$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo "<br>";
echo $a[1][1][0];
$athree=$a[1][1][0];
var_dump($athree);



echo "<b>Exercise 4</b> If you have the following array, how do you extract the value 3 from the array?";
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
echo "<br>";
echo $a["b"]["o"]["b"];
$athree=$a["b"]["o"]["b"];
var_dump($athree);


echo "<b>Exercise 5</b> Create a new array with each comma-separated value as its own array element from the string.<br>";
echo "Use php **explode** function. Use search in [PHP documentation website] https://www.php.net/ to find out how this function works.)<br>";
$a = "a,b,c,d,e,f";
$pieces = explode(",", $a);
echo $pieces[0];
echo "<br>";
echo $pieces[1];
echo "<br>";
echo $pieces[2];
echo "<br>";
echo $pieces[3];
echo "<br>";
echo $pieces[4];
echo "<br>";
echo $pieces[5];

var_dump($pieces);


$a= "a,b,c,d,e,f,";
$split = str_split($a, 2);
print_r($split);

echo "<br>";
echo "<br>";
echo "<b>Exercise 6 </b> <br>";
echo " With the result array from `5`, create a new array where each element is *both* key *and* value. In other words, the result should be:";
$arr = array(
    "a"=>"a",
    "b"=>"b",
    "c"=>"c",
    "d"=>"d",
    "e"=>"e"
);


$assoc = array();

foreach ($pieces as $i => $value) {
        $assoc[$value] = $value;
}
echo "<br>";
print_r($assoc);
var_dump($assoc);

echo "<b>Exercise 7 </b> <br>";
echo "You have two arrays like the following. One contains field labels, the other contains field values. Write a program to merge this two arrays in such way to output the third array. Use foreach loop";

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// want to output
/*"$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"*/

    $keyValues= array_values($keys);
    $valuesValues = array_values($values);
    echo "<br>";
    print_r($keyValues);
    echo "<br>";
    print_r($valuesValues);

    $keysValues = array_combine($keyValues, $valuesValues);
    echo "<br>";
    print_r($keysValues);
    var_dump($keysValues);


    echo "<b>Exercise 8 </b> <br>";
   echo "You have an array of transactions, each of which has a debit and credit amount. Find the absolute value of the transaction amount (i.e. `abs( debit - credit )`) and add it as a new `key=>value` pair to each transaction";

    $transactions = array(
        array(
            "debit"=>2,
            "credit"=>3
        ),
        array(
            "debit"=>15,
            "credit"=>14
        )
    );

    // outputs
    $transactions = array(
        array(
            "debit"=>2,
            "credit"=>3,
            "amount"=>1
        ),
        array(
            "debit"=>15,
            "credit"=>14,
            "amount"=>1
        )
    );

    foreach ($transactions as $key => $value) {
        $debit = $transactions[$key]["debit"];
        $credit = $transactions[$key]["credit"];
        $amount = abs($debit-$credit);
    }
    var_dump($transactions);


    echo "<b>Exercise 9 </b> <br>";
    echo "Find the sum of this array of numbers `a = array( 0, 1, 2, 3, 4, 5, 6 );`. Use foreach loop.";
    
   
   
    $suma = 0;

    $a = array( 0, 1, 2, 3, 4, 5, 6 );
    foreach ($a as $value) {
        $suma += $value;
    };
    echo "<br>";
    var_dump($suma);
    echo "<br>";
    echo array_sum($a);
    ?>