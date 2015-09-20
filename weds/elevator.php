<?php 

$elevatorDir = 'up';
$personDir = 'up';

$personFloor = 4;
$elevatorFloor = 5;


if($personDir == "up"){
    if($elevatorDir == "up"){
        if($personFloor > $elevatorFloor){
            echo "Can Pick you up";
        }
    }
}



 ?>