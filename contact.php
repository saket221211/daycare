<?php
    include "header.php";?>
<img src="contact img.png" data-aos="zoom-out-left" width="100%">'
<div class="row">
  <div class="col-lg-6 p-5 ">
    <h1 class="text-danger">Contact Us</h1>
    <p class="text-success fs-5">Daycare<br>
      Child Development Center and Private School<br>
      Bhantinda<br>
      Houston, TX 77079</p>
    <h3 class="text-info">T: (281) 589-2626</h3>
    <p> Hours of operation: Monday-Saturday (6:30am-6:30pm)<br>
    </p>
    <h4 class="text-success">Email: saket@gmail.com</h4>
    <div class="row">
      <div class="col-lg-4">
        <img src="img1.jpg">
        <img src="img4.jpg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27491.15204047463!2d75.94012025309897!3d30.53817034257918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391069a660696aef%3A0x3bc789e57615106b!2sChandigarh%2C%20Punjab%20148023!5e0!3m2!1sen!2sin!4v1718864335556!5m2!1sen!2sin" width="750" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4">
        <img src="img2.jpg">
        <img src="img5.jpg">
      </div>
      <div class="col-lg-4">
        <img src="img3.jpg">
        <img src="cli3c.jpg">
      </div>

</div>

  </div>
  <div class="col-lg-6  text-center p-5 ">
    <?php
      if(isset($_POST['btncontact']))
      {
        $Pname=$_POST['Pname'];
        $Pphone=$_POST['Pphone'];
        $Pemail=$_POST['Pemail'];
        $Cname=$_POST['Cname'];
        $Cbirthdate=$_POST['Cbirthdate'];
        $interestedin=$_POST['interestedin'];
        $startdate=$_POST['startdate'];
        $message=$_POST['message'];
      
        $qry="insert into tbcontact(Pname,Pphone,Pemail,Cname,Cbirthdate,interestedin,startdate,message,currentdate) 
        values('$Pname','$Pphone','$Pemail','$Cname','$Cbirthdate','$interestedin','$startdate','$message',now())";
        if (mysqli_query($con,$qry))
           {
             echo "<script>alert('THANK YOU FOR CONTACT US!')</script>";
           }
       else
          {
            echo mysqli_error($con);
          }
      }
      ?>

    <form action="#" method="post">
      <h2 class="text-success">Inquiries / Request a Tour</h2>
      <label>Parent's Name</label><br>
      <input type="text" size="40" name="Pname">
      <br>
      <label>Parent's Phone</label><br>
      <input type="text" size="40" name="Pphone">
      <br>
      <label>Parent's Email</label><br>
      <input type="Email" size="40" name="Pemail">
      <br>
      <label> Child's Name</label><br>
      <input type="text" size="40" name="Cname">
      <br>
      <label> Child's Birthdate</label><br>
      <input type="text" size="40" name="Cbirthdate">
      <br>

      <label>Interested In</label><br>

      <select name="interestedin" class="px-4">

        <option value="Please Choose">PLease Choose</option>
        <option value="Full-Time">Full-Time</option>
        <option value="part-Time">Part-Time</option>
        <option value="After-school care">After-school care</option>
      </select>
      <br>

      <label>Anticipated Start Date</label><br>
      <input type="text" size="40" name="startdate"><br>
      <label>Comments</label><br>
      <input type="text" size="30" class="p-5" name="message"><br>
      <button type="submit" name="btncontact" class="design">Submit</button>

    </form>
  </div>
</div>

</body>
<script src="js/bootstrap.bundle.js "></script>

</html>
<?php
  include "footer.php";?>