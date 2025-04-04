<?php
include "header.php";?>

<
<div class="container">
<div class="row">
<?php
$id=mysqli_real_escape_string($con,$_GET['id']);
$qry="select * from tbblog where id='$id' ";
$run=mysqli_query($con,$qry);
while($data=mysqli_fetch_array($run))
{
    echo "<div class='col-lg-12 mt-4'text-center>
    <img  src='uploads/".$data['image']."' width='100%' height='400px'>
     <h1 class=text-success>".$data['title']."</h1>
      <h3>".$data['description']."</h3>
       <h3>".$data['submitby']." </h3>
     <a href='blog-details.php?id=" .$data['id']."'></a>
    </div>";
}
?>

</div>


