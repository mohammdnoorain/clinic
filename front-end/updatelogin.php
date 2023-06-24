<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
   
</head>
<body>
    <?php 
    include 'config.php';
   
        $id=$_GET['id'];
        $sql="select * from login where id='$id' ";
        $result=$con->query($sql);
         if($row=$result->fetch_assoc())
        {
            $id=$row['id'];
          
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
           
           
        }
      
   
    ?>
    <form method=POST>
       
        <h2>Detail of user id=<?php echo $id ?></h2>
        item id:<input type=text name=uid value=<?php echo $id ?>><BR>
        Product Name: <input type=text name=name value=<?php echo $name ?>><BR>
        Product Price:<input type=text name=email value=<?php echo  $email ?>><BR>
        Product Price:<input type=text name=password value=<?php echo  $password ?>><BR>
        <input type=submit name=submit value=submit>
    </Form>   
    <?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        


           
            $id=$_POST['uid'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
          
            
            
        
        $sql="update login set id ='".$id."', name='".$name."',password ='".$password."' where id='$id'";
         echo $sql; 
        $con->query($sql);
         echo "Update succesful!";
    }
    ?>
    <BR><BR>
    <A href=admin.php>Back</A>
</body>
</html>