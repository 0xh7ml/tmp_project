<?php 
include('config.php');

// Insert item data
$sql_query = "INSERT INTO `tb_order`(`cus_name`, `cus_phone`, `line_item`, `qty`) VALUES ('$_POST[cus_name]','$_POST[cus_phone]','$_POST[line_item]', '$_POST[qty]')";


$result = mysqli_query(
    $conn, $sql_query
);

if($result === TRUE){
    header("Location: sales.php");
}
else{
    echo mysqli_error($conn);
    mysqli_close($conn);
}
?>