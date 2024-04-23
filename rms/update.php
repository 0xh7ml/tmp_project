<?php

include('config.php');

// Update item data

if(isset($_POST['id']) && !empty($_POST['id'])){
    
    $id = $_POST['id'];
    echo $id;   

    $sql_query = "UPDATE `tb_items` SET `item_name`='$_POST[name]',`item_price`='$_POST[price]' WHERE `id`=" .$id ;

    $result = mysqli_query(

    $conn, $sql_query
    );

    if($result === TRUE){
    header("Location: menu.php");

    }

    else{
    mysqli_close($conn);
    }
}
else{
    echo 'Error happend';
}