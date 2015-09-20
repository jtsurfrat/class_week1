<?php 

// echo 10 % 3 . "<br>";
// echo pow(2,4) . "<br>";

// echo "hello" . "<br>";

// $num = 15 + (7 * 23)-(19 * 4);

// $num = 10 + $num;

// $num += 10;

// $num .10;
// $num .=10;
// $num = $num . 10;

// echo $num;


$dirPerson = "down";
$dirElevator = "down";

$personFloor = 7;
$elevatorFloor = 6;

if($dirPerson == "up"){
    if($dirElevator == "up"){
        if($personFloor > $elevatorFloor){
            echo "Can pick you up";
        } else{
            echo "No too far";
        }
    } else{
        echo "Wrong way";
    }
} else {
    if($dirElevator == "down"){
        if($dirPerson == "down"){
            if($personFloor < $elevatorFloor){
                echo "Going down can pick up";
            } else{
                echo "Too far down";
            }
        } else{
            echo "No wrong way";
        }
    }

}

// Assume we have some GET variables supplied in the HTTP request. Suppose $_GET['temp'] is supplied with either "hot" or "cold" as possible values. Also suppose $_GET['coast'] is supplied with either "east" or "west". Output the following state they should live in based on their choice:

// Arizona == west hot
// Florida == east hot
// Colorado == cold west
// Maine == cold east
// tempe = hot cold 
// coastal = eat west

$location = 'east';
$temp = 'cold';

if($location =='west'){
    if($temp == 'hot'){
        echo "az";
    } else {
        echo "Co";
    }
} else {
    if($location== 'east'){
        if($temp == 'hot'){
            echo "Florid";
        } else{
            echo "main";
        }
    }
}

$username = "Daniel";

$message = "Hello" . $username;

if($hour < 12){
    $message .= 'Good morning';
} else {
    $msg .= 'Good';
}



 ?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    </body>
</html>