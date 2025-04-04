<?php
include "header.php";?>
<div class="img8">
    <span style="display:initial;color:rgb(38,169,252)" class="fw-bold display-1" >OUR </span>
    <span style="display:initial;color:rgb(248,49,166)" class="fw-bold display-1" >BLOG </span>
   </div>

<p class="text-center display-3 fw-bold text-warning" data-aos="zoom-in">Creative ChildCare Blog</p>
<div class="container">
<div class="row">
<?php
$qry="select * from tbblog  ";
$run=mysqli_query($con,$qry);
while($data=mysqli_fetch_array($run))
{
    
    echo "<div class='col-lg-4 mt-4'>
   
    <img  src='uploads/".$data['image']."' width='95%' height='300px'>
     <h3 class=text-success>".$data['title']."</h3>
      <p>".$data['description']."</p>
       <h3>".$data['submitby']." </h3>
     <a href='blog-details.php?id=" .$data['id']."'><button >show more</button></a>
  
    </div>";
}
?>

</div>
<div class="mt-5" width="100%"></div>
<?php
  include "footer.php";?>


















