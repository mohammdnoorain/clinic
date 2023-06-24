<?php
    
    include 'config.php';
    $id = $_GET['id'];
   
    $sql="delete from login where id='".$id."'";
    $con->query($sql);
    echo "Record deleted succesfully!";


?>