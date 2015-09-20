<?php 

$elevatorDir = 'down';
$personDir = 'down';

$personFloor = 8;
$elevatorFloor = 7;


if($personDir == "up"){
    if($elevatorDir == "up"){
        if($personFloor > $elevatorFloor){
            echo "Can Pick you up";
        } else {
            echo "No, too far down.";
        }
    } else {
        echo "NO, wrong way.";
    }
} else {
    if($personDir == "down"){
        if($elevatorDir == "down"){
            if($personFloor < $elevatorFloor){
                echo "Yes, can pick you up";
            } else {
                echo "NO, too far down.";
            }
        } else {
            echo "Wrong direction";
        }
    }
}



 ?>