<?php
include "dbcon.php";?>
<html>

<head>
  <title>Login page</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="project.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row bg-secondary h-100 d-flex justify-content-center align-items-center">
        <div class="col-lg-4 bg-light p-5 "> 
<?php
if(isset($_POST['btncontact']))
{
    $Email=mysqli_real_escape_string($con,$_POST['Email']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    $qry="select * from tbsignup where Email='$Email' and Password='$Password'";
    $run=mysqli_query($con,$qry);
    if(mysqli_num_rows($run)>0)
    {
        echo "<script>window.location.href='dashboard.php';</script>";

    }
    else
    {
        echo "<script>alert('username or password invalid')</script>";

    }
}
?>
<form action="#" class="form-control my-2" method="POST">
<div class="input-group-text my-2">
<span class="input-group-text py-2 rounded-0"><i class="fa-solid fa-envelope"></i></span>
<input type="Email" class="form-control my-2" placeholder="Enter Your Email" name="Email"></div>
<div class="input-group-text my-2">
 <span class="input-group-text py-2 rounded-0"><i class="fa-solid fa-lock"></i></span>
<input type="Password" class="form-control my-2" placeholder=" Enter your Password " name="Password"></div>
<button  name="btncontact" class="btn btn-warning text-white w-100 mt-3">Login</button>