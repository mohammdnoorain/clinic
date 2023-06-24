<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <script>
        function confirmdelete()
        {
            let ans=confirm("Are you sure?");
            return ans;
        }
    </script>    
</head>
<body>
    <?php 
    include 'config.php';
    
        $id=$_GET['id'];
        $sql="select * from contact where id='$id' ";
        $result=$con->query($sql);
         if($row=$result->fetch_assoc())
        {
            $id=$row['id'];
            $fname=$row['firstname'];
            $lname=$row['lastname'];
            $phone=$row['phone'];
            $email=$row['email'];
            $look=$row['where you find us'];
            $message=$row['message'];
            $page=$row['landed through page'];
           
           
          
        }
      
   
    ?>
    <form method=POST onsubmit="return confirmdelete()">
        <h2>Detail of user id=<?php echo $id ?></h2>
         Id:<input type=text name=uid value=<?php echo $id ?>><BR>
        First Name: <input type=text name=fname value=<?php echo $fname ?>><BR>
        Last Name:<input type=text name=lname value=<?php echo  $lname ?>><BR>
        Phone :<input type=text name=phone value=<?php echo  $phone ?>><BR>
        email:<input type=text name=email value=<?php echo  $email ?>><BR>
        where did you find us:<input type=text name=find value=<?php echo  $look?>><BR>
        Message:<input type=text name=message value=<?php echo  $message ?>><BR>
        Landed through Page:<input type=text name=page value=<?php echo  $page ?>><BR>
        
       <input type=submit name=submit value="Delete">
    </Form>   
    <?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $look=$_POST['find'];
            $message=$_POST['message'];
            $page=$_POST['page'];
           
      
        
        $sql="Delete from contact where id='$id'";
        //echo $sql; 
        $con->query($sql);
         echo "Record deleted succesfully!";
    }
    ?>
    <BR><BR>
    <A href=admin.php>Back</A>
</body>
</html>