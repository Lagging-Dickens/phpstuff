<?php
//This is an arithmetic operator//
$num1=62;
$NUM2=34;
$num3=96;
$num4="96";

echo $num1+$NUM2;//addition operator
echo "<br>";
echo $num1-$NUM2;//subtraction operator
echo "<br>";
echo $num1*$NUM2;//multiplication operator
echo "<br>";
echo $num1/$NUM2;//division operator
echo "<br>";
echo $num1%$NUM2;//modulus operator
echo "<br>";

//Comparison operator
var_dump($num3==$num4);//equal operator
echo "<br>";
var_dump($num3===$num4);//identical operator
echo "<br>";
var_dump($num1>$NUM2);//greater than operator
echo "<br>";
var_dump($num1>=$NUM2);//greater than or equal to operator
echo "<br>";
var_dump($num1<=$NUM2);//less than or equal to operator
echo "<br>";
var_dump($num1!=$NUM2);//not equal to operator
echo "<br>";
var_dump($num1<=>$NUM2);//spaceship operator
echo "<br>";

//Logical operator
var_dump($num1>=$num3 || $num3==$num4);//Or operator
echo "<br>";
var_dump($num1<=$num3 && $num3===$num4);//And operator
echo "<br>";

//String operator
$name1="Dickens";
$name2="Onyango";
echo $name1.$name2;
echo "<br>";

//Increment/Decrement operators
echo ++$num1;
echo "<br>";
echo $num1++;
echo "<br>";
