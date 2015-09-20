<?php  

// $loggedIn = true;

// if($loggedIn){
//     echo "you are login";
// } else {
//     echo "please log in";
// }

// $product_id = 3;

// if($product_id == 1){
//     echo "frisbee";
// } else {
//     if($product_id == 2){
//         echo "hammer";
//     } else {
//         if($product_id == 3){
//             echo "stuff";
//         }
//     } 
// }
// $a = '';
// echo $a;

// if($product_id == 1){
//     echo "frisbee";
// }elseif($product_id == 2){
//    echo "harsss";
// }elseif($product_id == 3){
//     echo "stuff";
// }elseif($product_id == 4){
//     echo "bacon";
// } else{
//     echo "this can't happen";
// }

$fruit = "stuff"; // banana, apple, grape, orange, pear
$color = '';

if($fruit == 'banana'){
    $color = "yellow";
}elseif($fruit == "apple"){
   $color = "green";
}elseif($fruit == "orange"){
    $color = "orange";
}else {
    $color = "error invalid fruit" . "<br>";
} 

echo "The color is " . $color;

$guys = 'tom';
$shirt = '';

if($guys == 'ben'){
    $shirt = 'red';
} elseif($guys == 'ryan'){
    $shirt = "yellow";
} elseif($guys == "bob"){
    $shirt = 'pink';
} else{
    $shirt = 'stuff';
}

// $hungry = 
// if()


// echo "The shirt color is " . $shirt;


// switch($guys){
//     case "tom":
//         $shirt = "green";
//         break;

// }
// echo $shirt;


// $fruit = ""; // banana, apple, grape, orange, pear
// $color = '';

// if($fruit == 'banana'){
//     $color = "yellow";
// }elseif($fruit == "apple"){
//    $color = "green";
// }elseif($fruit == "orange"){
//     $color = "orange";
// }else {
//     $color = "error invalid fruit" . "<br>";
// } 

// // echo "The color is " . $color;

// if(!isset($fruit)){
//     echo "There is no error";
// }



$user_age = 20;

if($user_age < 13){
    echo "You don't belong here";
} else {
    echo "come in";
}

if('cat' < 'cab'){
    echo "true";
} else {
    echo "false";
}

if('3' == 3){
    echo 'equal';
} else {
    echo 'not equal';
}

?>