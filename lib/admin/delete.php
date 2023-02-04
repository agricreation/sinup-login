<?php
include "../db.php";

// if($con){
//     echo "database connected successfully";
// }
// DELETE FROM `signup` WHERE ((`id` = '46'));

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    // $sql="delete from `signup` where id=.$id.";
    $sql="DELETE FROM `signup` WHERE ((`id` = '$id'))";
    echo "ID $id ";
    $final=mysqli_query($con,$sql);
    if($final){
        echo "Deleted successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>
