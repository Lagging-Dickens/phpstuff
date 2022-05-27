<?php
$cars="Ferrari";
switch ($cars){
    case "Honda":
        echo "Vtech boooooiiiii";
        break;
    case "Nissan":
        echo "godzilla.RB poweeeeer";
        break;
    case "Mazda":
        echo "Rotary power";
        break;
    case "Toyota":
        echo "Is that a supraaaaaa!!!";
        break;
    case "Maybach":
        echo "bouncy booooooiii";
        break;
    case "Audi":
        echo "Im fast af boooiii";
        break;
    case "Beamer":
        echo "Four does more h**s";
        break;
    default:
        echo "Others too expensive";
}
echo "<br>";
//has an error.......
$grade=1;
switch ($grade){
    case $grade>=89 && $grade<=100:
        echo "A+";
        break;
    case $grade>=76 && $grade<=88:
        echo "A";
        break;
    case $grade>=66 && $grade<=75:
        echo "B+";
        break;
    case $grade>=56 && $grade<=65:
        echo "B";
        break;
    case $grade<=43 && $grade<=55:
        echo "B-";
        break;
    case $grade<=30 && $grade<=44:
        echo "C+";
        break;
    case $grade<=29 && $grade<=0:
            echo "Failure";
            break;
    default:
        echo "Error";
}