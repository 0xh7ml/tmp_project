<?php 
include('config.php');

// Insert item data
$sql_query = "INSERT INTO `tb_items`(`item_name`, `item_price`) VALUES ('$_POST[name]','$_POST[price]')";


$result = mysqli_query(
    $conn, $sql_query
);

if($result === TRUE){
    header("Location: menu.php");
}
else{
    echo mysqli_error($conn);
    mysqli_close($conn);
}
?>