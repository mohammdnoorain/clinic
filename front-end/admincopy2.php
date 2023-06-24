


<?php
include 'config.php';
session_start();
if(!isset($_SESSION["loggedin-user"])){
    header("location:adminlogin.php");
}
// $id="";
// $fname="";
// $lname=0;
// $phone=0;
// $email=0;
// $message=0;
// $page=0;
// $date=0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>User Dashboard</title>

    <!-- Google font -->
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
<script>

//  function show(){
//     var x=document.getElementById("search").value;
//     alert(x);
//     var xmlhttp=new XMLHttpRequest();
//         xmlhttp.onreadystatechange=function(){
//             if(this.readyState == 4 && this.status == 200){
//                 alert(this.responseText)
           
//             }
//         };
       
//         xmlhttp.open("GET","search.php?x="+x,true)
//         xmlhttp.send();
    
    


//  }


    </script>

<body>

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="pb-md-4 pb-0">
        <div class="header-top" style="background-color:#143288;" >
            <div class="container-fluid-lg" >
                <div class="row">
                    <div class="col-xxl-3 d-xxl-block d-none">
                       
                    </div>

                    <div class="col-xxl-6 col-lg-9 d-lg-block d-none" >
                        <div class="header-offer" ">
                            <div class="notification-slider">
                                <div>
                                    <div class="timer-notification">
                                        <h6><strong class="me-1">Welcome to Admin Panel!</strong>Handle your website with Smooth Experience.

                                        </h6>
                                    </div>
                                </div>

                                <div>
                                    <div class="timer-notification">
                                        <h6>Its Your World :)
                                            
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="index.html" class="web-logo nav-logo">
                                <img src="image/logo2.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            

                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type" placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <div class="search-box">
                                                    <i data-feather="search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side">
                                        <a href="contact-us.html" class="delivery-login-box">
                                          
                                           
                                        </a>
                                    </li>
                                  
                                    
                                    <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                <h5>My Account</h5>
                                            </div>
                                            <button type="button" style="margin-left:10px" class="btn btn-primary"><a href ="logout.php">Log Out</a></button>
                                         
                                        </div>
                                       

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                <li class="product-box-contain">
                                                    
                                                    <a href="login.html"> Log In</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="sign-up.html">Register</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="forgot.html">Forgot Password</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="header-nav">

                    
                        
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li>
                <a href="index.html">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="wishlist.html" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="cart.html">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">

            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Admin Dashboard</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- User Dashboard Section Start -->
    <section class="user-dashboard-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <div class="dashboard-left-sidebar">
                        <div class="close-button d-flex d-lg-none">
                            <button class="close-sidebar">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="profile-box">
                            <div class="cover-image">
                                <img src="image/admin.webp" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="profile-contain">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        <img src="image/adminlogo2.jfif"
                                            class="blur-up lazyload update_img" alt="">
                                    </div>
                                </div>

                                <div class="profile-name">
                                    <h3>ADMIN CONTROL PANEL</h3>
                                   
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#pills-tabContent" class="nav-link active" id="pills-dashboard-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-dashboard" role="tab"
                                    aria-controls="pills-dashboard" aria-selected="true"><i data-feather="home"></i>
                                    DashBoard</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-product-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-product" type="button" role="tab"
                                    aria-controls="pills-product" aria-selected="false"><i
                                        data-feather="shopping-bag"></i>Admin Login Details</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-order"
                                    aria-selected="false"><i data-feather="shopping-bag"></i>View Contact</button>
                            </li>
                            

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false"><i data-feather="user"></i>
                                    Profile</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-security" type="button" role="tab"
                                    aria-controls="pills-security" aria-selected="false"><i data-feather="settings"></i>
                                    Setting</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-out-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-out" type="button" role="tab" aria-selected="false"><i
                                        data-feather="log-out"></i>
                                    Log Out</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-9 col-lg-8">
                    <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                        Menu</button>
                    <div class="dashboard-right-sidebar">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                aria-labelledby="pills-dashboard-tab">
                                <div class="dashboard-home">
                                    <div class="title">
                                        <h2>My Dashboard</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
          
          
                                    </div>



<form method=POST>
    <div style="display:flex;justify-content:center;">
<input style=" width:250px;"  type=text name=input />
<button style="background-color:#143288;color:white; width:90px;height:40px;margin-left:30px;border-radius:5px;" name=submit>search</button>
</div>
</form


<?php

                                   

if(isset($_POST['submit']))
{
    $name=$_POST['input'];
    
    // echo $tagname;


$sql="select * from contact where find='$name'";





 $res=$con->query($sql);
 $count=mysqli_num_rows($res);
 if($count==0)
 {
  echo"<script>alert('No items In the CArt')</script>";
 }
 else{

  
  while($row=$res->fetch_assoc())
  {
      $id=$row['id'];
     $fname=$row['firstname'];
      $lname=$row['lastname'];
      $phone=$row['phone'];
      $email=$row['email'];
      $message=$row['message'];
      $page=$row['page'];
      $date=$row['date'];
      
  
  
      
      ?>



                                    <div class="table-responsive dashboard-bg-box">
                                        <table class="table product-table">
                                            <thead>
                                            <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col"> First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">email</th>
                                                    <th scope="col">message</th>
                                                    <th scope="col">page</th>
                                                    <th scope="col">Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/1.png"
                                                            class="img-fluid" alt="">
                                                    </td> -->
                                                    
                                                     <td>
                                                        <h6><?php echo $id?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $fname?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $lname?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $phone?></h6>
                                                    </td>
                                                    
                                                    <td>
                                                        <h6><?php echo $email?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $message?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $page?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $date?></h6>
                                                    </td>
                                                    



                                                </tr>
                                                <?php

}
}

}

                                                ?>
                                               
       
</tbody>
</table>
 

 
<nav class="custome-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                        <i class="fa-solid fa-angles-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:void(0)">1</a>
                                                </li>
                                                <li class="page-item" aria-current="page">
                                                    <a class="page-link" href="javascript:void(0)">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="fa-solid fa-angles-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
</div>
</div>

                                            


                                    
                        

                                   

                                   

                                    
                                
                            <div class="tab-pane fade" id="pills-product" role="tabpanel"
                                aria-labelledby="pills-product-tab">
                                <div class="product-tab">
                                    <div class="title">
                                        <h2>Admin Details</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>


                                    

 <!-- start -->


 

























                                       
<?php
                                        

                                          
          
                                        ////////////////////////////////
                                      $sql="select * from login";
      
      
      
      
                                        
                                         $res=$con->query($sql);
                                         $count=mysqli_num_rows($res);
                                         if($count==0)
                                         {
                                          echo"<script>alert('No items In the Contact List')</>";
                                         }
                                         else{
                                          
                                          while($row=$res->fetch_assoc())
                                          {
                                            $id=$row['id'];
                                              $name=$row['name'];
                                              $email=$row['email'];
                                              $password=$row['password'];
                                             $date=$row['date'];
                                              
                        

                                ?>



                             
                                                   







                                    <div class="table-responsive dashboard-bg-box">
                                        <table class="table product-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col"> Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Password</th>
                                                    <th scope="col">Date of Registration</th>
                                                    <th scope="col">update</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/1.png"
                                                            class="img-fluid" alt="">
                                                    </td> -->
                                                    <td>
                                                        <h6><?php echo $id?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $name?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $email?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $password?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $date?></h6>
                                                    </td>
                                                    <td>
                                                    <A href=updateadminlogin.php?id=<?php echo $id ?>> <img src=image/update3.jpg height=20 width=20></A>
                                                   
                                                    </td>
                                                    <td>
                                                    <A href=deletelogin.php?id=<?php echo $id ?>><img src=image/delete.jfif height=20 width=20></A>
                                                    </td>



                                                </tr>


                                                         
                                  <?php        }
                                        }
                                              ?>

                                              
                                            </tbody>
                                        </table>

                                        <nav class="custome-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                        <i class="fa-solid fa-angles-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:void(0)">1</a>
                                                </li>
                                                <li class="page-item" aria-current="page">
                                                    <a class="page-link" href="javascript:void(0)">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="fa-solid fa-angles-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-order" role="tabpanel"
                                aria-labelledby="pills-order-tab">
                                <div class="dashboard-order">
                                    <div class="title">
                                        <h2>All Contact</h2>
                                        <span class="title-leaf title-leaf-gray">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                   
<?php
                                        

                                          
          
                                        ////////////////////////////////
                                      $sql="select * from contact order by date DESC";
      
      
      
      
                                        
                                         $res=$con->query($sql);
                                         $count=mysqli_num_rows($res);
                                         if($count==0)
                                         {
                                          echo"<script>alert('No items In the Contact List')</script>";
                                         }
                                         else{
                                          
                                          while($row=$res->fetch_assoc())
                                          {
                                            $id=$row['id'];
                                              $fname=$row['firstname'];
                                              $lname=$row['lastname'];
                                              $phone=$row['phone'];
                                              $email=$row['email'];
                                              $find=$row['find'];
                                              $message=$row['message'];
                                              $page=$row['page'];
                                             $date=$row['date'];
                                              
                        

                                ?>



                                <div class="order-tab dashboard-bg-box">
                                    <div class="table-responsive">
                                        <table class="table order-table">
                                            <thead>
                                            
                                               <tr>
                                                     <th scope=col>ID</th>
                                                    <th scope=col>First Name</th>
                                                    <th scope="col">tLast Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Where Did You Find Us</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">page</th>
                                                    <th scope="col">Date</th>
                                                   
                                                   
                                                    <th scope="col">Update</th>
                                                    <th scope="col">Delete</th>
                                                </tr>";
                                                                                         </thead>
                                            <tbody>
                                        <tr>
                                                    <td>
                                                    <h6><?php echo $id?></h6>
                                                </td>
                                                    <td>
                                                        <h6><?php echo $fname; ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $lname; ?></h6>
                                                    </td>

                                                    <td>
                                                        <h6><?php echo $email?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $phone; ?></h6>
                                                    </td>
                                                   
                                                   
                                                    <td>
                                                        <h6><?php echo $find?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $message?></h6>
                                                    </td>
                                                    <td>
                                                        <h6><?php echo $page?></h6>
                                                    </td>

                                                    <td>
                                                        <h6><?php echo $date?></h6>
                                                    </td>
                                                   
                                                   
                                                    
                                                   
                                                    <td>
                                                    <A href=UpdateRecitem.php?id=<?php echo $id ?>> <img src=image/update3.jpg height=20 width=20></A>
                                                   
                                                    </td>
                                                    <td>
                                                    <A href=DeleteRecitem.php?id=<?php echo $id ?>><img src=image/delete.jfif height=20 width=20></A>
                                                    </td>
                                                </tr>
                                            
                                              
                                  <?php        }
                                        }
                                              ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>


                                        <!-- /php end -->
                                        <nav class="custome-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                        <i class="fa-solid fa-angles-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:void(0)">1</a>
                                                </li>
                                                <li class="page-item" aria-current="page">
                                                    <a class="page-link" href="javascript:void(0)">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="fa-solid fa-angles-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="dashboard-profile">
                                    <div class="title">
                                        <h2>My Profile</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="profile-tab dashboard-bg-box">
                                        <div class="dashboard-title dashboard-flex">
                                            <h3>Profile Name</h3>
                                            <button class="btn btn-sm theme-bg-color text-white" data-bs-toggle="modal"
                                                data-bs-target="#edit-profile">Edit Profile</button>
                                        </div>

                                        <ul>
                                            <li>
                                                <h5>Company Name :</h5>
                                                <h5>Grocery Store</h5>
                                            </li>
                                            <li>
                                                <h5>Email Address :</h5>
                                                <h5>joshuadbass@rhyta.com</h5>
                                            </li>
                                            <li>
                                                <h5>Country / Region :</h5>
                                                <h5>107 Veltri Drive</h5>
                                            </li>

                                            <li>
                                                <h5>Year Established :</h5>
                                                <h5>2022</h5>
                                            </li>

                                            <li>
                                                <h5>Total Employees :</h5>
                                                <h5>154 - 360 People</h5>
                                            </li>
                                            <li>
                                                <h5>Category :</h5>
                                                <h5>Grocery</h5>
                                            </li>

                                            <li>
                                                <h5>Street Address :</h5>
                                                <h5>234 High St</h5>
                                            </li>

                                            <li>
                                                <h5>City / State :</h5>
                                                <h5>107 Veltri Drive</h5>
                                            </li>

                                            <li>
                                                <h5>Zip :</h5>
                                                <h5>B23 6SN</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-security" role="tabpanel"
                                aria-labelledby="pills-security-tab">
                                <div class="dashboard-privacy">
                                    <div class="title">
                                        <h2>My Setting</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="dashboard-bg-box">
                                        <div class="dashboard-title mb-4">
                                            <h3>Notifications</h3>
                                        </div>

                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="desktop" name="desktop"
                                                    checked>
                                                <label class="form-check-label ms-2" for="desktop">Show
                                                    Desktop Notifications</label>
                                            </div>
                                        </div>

                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="enable" name="desktop">
                                                <label class="form-check-label ms-2" for="enable">Enable
                                                    Notifications</label>
                                            </div>
                                        </div>

                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="activity"
                                                    name="desktop">
                                                <label class="form-check-label ms-2" for="activity">Get
                                                    notification for my own activity</label>
                                            </div>
                                        </div>

                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="dnd" name="desktop">
                                                <label class="form-check-label ms-2" for="dnd">DND</label>
                                            </div>
                                        </div>

                                        <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Save
                                            Changes</button>
                                    </div>

                                    <div class="dashboard-bg-box">
                                        <div class="dashboard-title mb-4">
                                            <h3>Deactivate Account</h3>
                                        </div>
                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="concern"
                                                    name="concern">
                                                <label class="form-check-label ms-2" for="concern">I have a privacy
                                                    concern</label>
                                            </div>
                                        </div>
                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="temporary"
                                                    name="concern">
                                                <label class="form-check-label ms-2" for="temporary">This is
                                                    temporary</label>
                                            </div>
                                        </div>
                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="other" name="concern">
                                                <label class="form-check-label ms-2" for="other">other</label>
                                            </div>
                                        </div>

                                        <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Deactivate
                                            Account</button>
                                    </div>

                                    <div class="dashboard-bg-box">
                                        <div class="dashboard-title mb-4">
                                            <h3>Delete Account</h3>
                                        </div>
                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="usable" name="usable">
                                                <label class="form-check-label ms-2" for="usable">No longer
                                                    usable</label>
                                            </div>
                                        </div>
                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="account" name="usable">
                                                <label class="form-check-label ms-2" for="account">Want to switch on
                                                    other
                                                    account</label>
                                            </div>
                                        </div>
                                        <div class="privacy-box">
                                            <div
                                                class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                <input class="form-check-input" type="radio" id="other-2" name="usable">
                                                <label class="form-check-label ms-2" for="other-2">Other</label>
                                            </div>
                                        </div>

                                        <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Delete My
                                            Account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- User Dashboard Section End -->

    <!-- Footer Section Start -->
    <footer class="section-t-space" >
        <div class="container-fluid-lg" style="background-color:#143288;">
           

            <div class="main-footer section-b-space section-t-space">
               

            <div class="sub-footer section-small-space">
                <div class="reserve">
                    <h6 class="text-content" style="color:white;">©2022 THe London Health Clinic All rights reserved</h6>
                </div>

                <div class="payment">
                    <img src="../assets/images/payment/1.png" class="blur-up lazyload" alt="">
                </div>

                <div class="social-link">
                    <h6 class="text-content" style="color:white;">Stay connected :</h6>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://in.pinterest.com/" target="_blank">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- Add address modal box start -->
    <div class="modal fade theme-modal" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a new address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                            <label for="fname">First Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                            <label for="lname">Last Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                            <label for="email">Email Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="address"
                                style="height: 100px"></textarea>
                            <label for="address">Enter Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="pin" placeholder="Enter Pin Code">
                            <label for="pin">Pin Code</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn theme-bg-color btn-md text-white" data-bs-dismiss="modal">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add address modal box end -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Edit Profile Start -->
    <div class="modal fade theme-modal" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="pname" value="Jack Jennas">
                                    <label for="pname">Full Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" id="email1" value="vicki.pope@gmail.com">
                                    <label for="email1">Email address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input class="form-control" type="tel" value="4567891234" name="mobile" id="mobile"
                                        maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                    <label for="mobile">Email address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address1"
                                        value="8424 James Lane South San Francisco">
                                    <label for="address1">Add Address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address2" value="CA 94080">
                                    <label for="address2">Add Address 2</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect1"
                                        aria-label="Floating label select example">
                                        <option selected>Choose Your Country</option>
                                        <option value="kindom">United Kingdom</option>
                                        <option value="states">United States</option>
                                        <option value="fra">France</option>
                                        <option value="china">China</option>
                                        <option value="spain">Spain</option>
                                        <option value="italy">Italy</option>
                                        <option value="turkey">Turkey</option>
                                        <option value="germany">Germany</option>
                                        <option value="russian">Russian Federation</option>
                                        <option value="malay">Malaysia</option>
                                        <option value="mexico">Mexico</option>
                                        <option value="austria">Austria</option>
                                        <option value="hong">Hong Kong SAR, China</option>
                                        <option value="ukraine">Ukraine</option>
                                        <option value="thailand">Thailand</option>
                                        <option value="saudi">Saudi Arabia</option>
                                        <option value="canada">Canada</option>
                                        <option value="singa">Singapore</option>
                                    </select>
                                    <label for="floatingSelect">Country</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect">
                                        <option selected>Choose Your City</option>
                                        <option value="kindom">India</option>
                                        <option value="states">Canada</option>
                                        <option value="fra">Dubai</option>
                                        <option value="china">Los Angeles</option>
                                        <option value="spain">Thailand</option>
                                    </select>
                                    <label for="floatingSelect">City</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address3" value="94080">
                                    <label for="address3">Pin Code</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" data-bs-dismiss="modal"
                        class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Profile End -->

    <!-- Edit Card Start -->
    <div class="modal fade theme-modal" id="editCard" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel8">Edit Card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="finame" value="Mark">
                                    <label for="finame">First Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="laname" value="Jecno">
                                    <label for="laname">Last Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect12"
                                        aria-label="Floating label select example">
                                        <option selected>Card Type</option>
                                        <option value="kindom">Visa Card</option>
                                        <option value="states">MasterCard Card</option>
                                        <option value="fra">RuPay Card</option>
                                        <option value="china">Contactless Card</option>
                                        <option value="spain">Maestro Card</option>
                                    </select>
                                    <label for="floatingSelect12">Card Type</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light">Update Card</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Card End -->

    <!-- Remove Profile Modal Start -->
    <div class="modal fade theme-modal remove-profile" id="removeProfile" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                        data-bs-target="#removeAddress" data-bs-toggle="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade theme-modal remove-profile" id="removeAddress" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove Profile Modal End -->

    <!-- Edit Profile Modal Start -->
    <div class="modal fade theme-modal" id="edit-profile" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Edit Your Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" value="Grocery Store">
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" value="joshuadbass@rhyta.com">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country / Region</label>
                            <input type="text" class="form-control" id="country" value="107 Veltri Drive">
                        </div>
                        <div class="mb-3">
                            <label for="established" class="form-label">Year Established</label>
                            <input type="email" class="form-control" id="established" value="2022">
                        </div>
                        <div class="mb-3">
                            <label for="employees" class="form-label">Total Employees</label>
                            <input type="text" class="form-control" id="employees" value="154 - 360 People">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="email" class="form-control" id="category" value="Grocery">
                        </div>
                        <div class="mb-3">
                            <label for="street" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="street" value="234 High St">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City / State</label>
                            <input type="email" class="form-control" id="city" value="107 Veltri Drive">
                        </div>
                        <div class="mb-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" value="B23 6SN">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold"
                        data-bs-dismiss="modal">Cancle</button>
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                        data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Profile Modal End -->

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="../assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Apexchart Js -->
    <script src="../assets/js/apexchart.js"></script>
    <script src="../assets/js/custom-chart.js"></script>

    <!-- Nav & tab upside js -->
    <script src="../assets/js/nav-tab.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>
</body>

</html>