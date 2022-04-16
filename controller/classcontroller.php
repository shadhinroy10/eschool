<?php

include_once 'db.php';

if ( isset($_POST['add'])){
    if($_POST['name'] ==null);{
    $error = "please insert class name";
    header("Location: ../class.php?name_error=".$error);
}else{
    $name = $_post['name'];

    $sql = "INSERT INTO semester(`name`) VALUES('$name')";

     $query =$conn->query($sql);

     if($query == TRUE){

         header("Location:../class.php?success=data inserted successfully");

     } else{
         header("Location:../class.php?error=data inserted failed");
     }


}



?>