<?php

function sayHi () {
    echo "si solo";
}
sayHi ();

// passing values to a function

function sayHi2 ($name) {
    echo "hi $name";
}
sayHi2 ("solomon <br>") ;
sayHi2 ("hafte<br>");
sayHi2 ("5") ;

function sayHi3 ($name="solomon") {
    echo "hello $name";
}
sayHi3 ("makiba") ;

function double2($number) {
    $number+=2;
    echo "<br> The value of number inside double2 func is. $number";
}
double2 (3) ;
function double3 ($number) {
    $number*= 2;
    return $number;
}
"<br>";
echo "<br> the returned value of function double3 is ";
$result =double3 (3) ;
echo $result;

function couter($name) {
    $i=1;
    while ($i < $name) {
        yield $i;
        yield $i+10;
        yield $i+ 20;
}
}

/* $result1=couter("5") ;
foreach( $result1 as $result ) {
    echo $result. ' ';
} */

function do2(&$num) {
    $num+= 2;

}
$num1=4;
echo "$num1 is " . $num1 ."<br>";
echo "hi sol";
echo "hi ". $num1 ."<br>";
do2($num1);
echo "$num1";


function addEnm(...$i) {
    return array_sum($i);
}
"<br>";
$result=addEnm(1,2,3,4,5,6,7,8,9,10) ."<br>";
echo $result;

function add($a,$b) {
    return $a+$b;
}
$result=[1,2,3,4,5];
echo add(...$result);


function sum1(int $a) :float {
    return ($a/=2);

}

$result=sum1(3.5) ."<br>";
echo $result;

// anonymous function
$num=2;
$result=function ($num){
    return $num*=2;
};

    

echo $result;
?>



