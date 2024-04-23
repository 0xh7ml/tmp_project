<?php
include('config.php');



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `tb_items` WHERE id =" . $id ;
    $res = mysqli_query($conn, $query);
    if($res){
        header("Location: menu.php");
        echo "Deleted Successfully";
        exit();
    }
    else{
        echo 'Error happened';
    }
}