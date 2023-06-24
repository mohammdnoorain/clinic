<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick-theme.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bulk-style.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css">
   
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
            $look=$row['find'];
            $message=$row['message'];
            $page=$row['page'];
           
        }
      
   
    ?>
    <form method=POST>
  
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="text" class="form-control" name="uid" value=<?php echo $id?> aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">First Name</label>
    <input type="text" class="form-control"name="fname" value=<?php echo $fname?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" value=<?php echo $lname?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" value=<?php echo $phone?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value=<?php echo $email?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">where did you find us</label>
    <input type="text" class="form-control" name="find" value=<?php echo $look?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Message</label>
    <input type="text" class="form-control" name="message" value=<?php echo $message?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Landed through Page</label>
    <input type="text" class="form-control" name="page" value=<?php echo $page?>>
  </div>
  
  <button type="submit" name=submit class="btn btn-primary">Submit</button>
</form>

    <?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        


        $id=$_POST['uid'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $look=$_POST['find'];
        $message=$_POST['message'];
        $page=$_POST['page'];
       
          
            
            
        
        $sql="update contact set id ='".$id."', firstname='".$fname."',lastname ='".$lname."',phone ='".$phone."',email ='".$email."',find ='".$look."',message ='".$message."',page ='".$page."' where id='$id'";
         echo $sql; 
        $con->query($sql);
         echo "Update succesful!";
    }
    ?>
    <BR><BR>
    <A href=admin.php>Back</A>
</body>
</html>