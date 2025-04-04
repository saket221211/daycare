<?php
include "adminheader.php";?>
<div class="container">
<h1 class="my-2 text-success">Add Blogs</h1>
<form class="" action="#" method="post" enctype="multipart/form-data">
<?php
if(isset($_POST['submit']))
{
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $img=$_FILES['file']['name'];
    $timg=$_FILES['file']['tmp_name'];
    move_uploaded_file($timg,"uploads/".$img);
    $submitby=mysqli_real_escape_string($con,$_POST['admin']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $qry="insert into tbblog(title,image,description,submitby,currentdate)values('$title','$img','$description','$submitby',now())";
if(mysqli_query($con,$qry))
{
echo "<script>alert('Blog Added Successfully')</script>";
}
else
{
echo mysqli_error($con);
}
}
?>   
    
<div class="row">
<input type="title" class="form-control my-2" placeholder="title" name="title">
</div>
<div class="row">
<input type="file" class="form-control my-2" placeholder="file" name="file">
</div>
<div class="row">
<input type="description" class="form-control my-2" placeholder="description" name="description">
</div>
<div class="row">
<input type="admin" class="form-control my-2" placeholder="admin" name="admin">
</div>
<div class="row">
    <button class="btn btn-primary text-white w-100 mt-3" name="submit">submit</button>
</div>
</div>
</div>
</form>


