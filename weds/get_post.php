<?php 


print_r($_GET);

// $name = $_GET['name'];

$product_id = null;

if(isset($_GET['p'])){
    $product_id = $_GET['p'];

if($product_id == 1) {
    echo "You picked mac<br>";
    }elseif ($product_id == 2) {
        echo "YOU picked pc";
    }else{
        echo "You haven't bought anything";
    }

}



echo $product_id;


 ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    // what is 500 is crash, broken on 
    // what is the http equiallent
    //other line is 301
    200 ok
    I can't find it 404
    <a href="get_post.php?p=1">stuff</a>
    <a href="get_post.php?p=2">stuff2</a>

    // user agent is how client identifies to users
    
</body>
</html>