<?php
$num1=15;
$num2=200;
$num3=10;

//while loop
while ($num1<=50){
    echo "My numbers are : $num1 <br>";
    $num1+=10;
}
echo "~break~";
echo "<br>";
while ($num2!=0){
    echo "My numbers are : $num2 <br>";
    $num2-=10;
}

//Do...while loop
do{
    echo "My number is $num3 <br>";
    $num3+=10;
}while($num3<=100);
echo "break";
echo "<br>";

//For loop
for($num4=50;$num4<=70;$num4++){
    echo "The number is $num4 <br>";
}
for ($num5=100;$num5!=0;$num5--){
    echo "The numbers are $num5 <br>";
}