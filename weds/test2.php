Your form does not submit to user.php with an HTTP POST request
Your gender input has two attributes that are not correct
You are missing an attribute for the checkboxes
You have a submit button, but not a cancel button
Your labels should either have a certain attribute that ties it to the input or it should wrap it around the input

<?php  


$floorperson = 6;
$cartfloor = 4;
$personDirect = 'up';
$cartDirect = "up";

if($personDirect == 'up'){
    if($cartDirect == "up"){
        if($floorperson > $cartfloor){
            echo "Can pick you up";
        } else {
            echo "NO can't pick you up";
        }
     } else {
        echo "No wrong way.";
     }
 }else {
    if($floorperson == "down"){
        if($)
    }
 }






?>


