<?php
    
    include 'config.php';
    $id=$_GET['id'];
    $remark=$_GET['remark'];

   echo"hello norain";
    $sql="select * from contact where id='".$id."'";
    $result=$con->query($sql);
    if($row=$result->fetch_assoc())
    {
        $id=$row['id'];
        $fname=$row['firstname'];
         $lname=$row['lastname'];
         $phone=$row['phone'];
         $email=$row['email'];
         $find=$row['find'];
         $message=$row['message'];
         $page=$row['page'];
         
    }
    // $sql="insert into contactbackup(id,firstname,lastname,phone,email,find,message,page,remarks,dateofcontact) values('".$id."','".$fname."','".$lname."','".$phone."','".$email."','".$find."','".$message."','".$page."','".$remark."',now())";


    $sql1="INSERT INTO `contactbackup`(`id`, `firstname`, `lastname`, `phone`, `email`, `find`, `message`, `page`, `remarks`, `dateofcontact`) VALUES ('$id','$fname','$lname','$phone','$email','$find','$message','$page','$remark',now())";
     $con->query($sql);
    echo $sql;
    echo "Record Inserted succesfully!";

    // $sql2="delete from contact where id='$id'";
    // $con->query($sql2);
    // echo "Record Inserted succesfully!";


?>