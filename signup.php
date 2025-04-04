<?php
include "dbcon.php";?>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="project.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="row bg-success h-100 d-flex justify-content-center align-items-center">
        <div class="col-lg-4 bg-light p-5 "> 
            
        </head>
<?php
if(isset($_POST['btncontact']))
{
    $Name=mysqli_real_escape_string($con,$_POST['Name']);
    $Email=mysqli_real_escape_string($con,$_POST['Email']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    $Cpassword=mysqli_real_escape_string($con,$_POST['Cpassword']);
    if($Password!=$Cpassword)
    {
        echo "password not match! ";
    }
    else{
        $qry="insert into tbsignup(Name,Email,Password,Currentdate) values('$Name','$Email','$Password',now())";
        if(mysqli_query($con,$qry))
        {
            echo "<script>alert('signup successfuly!')</script>";

        } 
    
    }
}
?>
 

<form action="#" method="post">
    <div class="input-group-text my-2">
        <span class="input-group-text py-2 rounded-0"><i class="fa-solid fa-user"></i></span>
    <input type="Name" class="form-control my-2" placeholder="your Name" name="Name"></div>
    <div class="input-group-text my-2">
        <span class="input-group-text py-2 rounded-0"><i class="fa-solid fa-envelope"></i></span>
    <input type="Email"class="form-control my-2" placeholder="Enter Your Email" name="Email"></div>
    <div class="input-group-text my-2">
        <span class="input-group-text py-2 rounded-0"><i class="fa-solid fa-lock"></i></span>
    <input type="Password" class="form-control my-2" placeholder=" Enter your Password " name="Password"></div>
    <div class="input-group-text my-2">
        <span class="input-group-text py-2 rounded-0"><i class="fa-solid fa-key"></i></span>
    <input type="Password" class="form-control my-2" placeholder="enter Password" name="Cpassword"></div>
    <button  type="submit" name="btncontact" class="btn btn-warning text-white w-100 mt-3" >Signup</button>
    </div>
</div> 
</form>

</body>
</html> 
