<?php
include "header.php";?>
< <img src="galleryimg.jpg" width=100%>
  <div class="row p-4">
    <div class="col-lg-8">
      <h1 class=text-danger>Careers</h1>
      <p>Welcome to the online application process at The Alphabet Club. A great team is what makes our center
        and our family care network so great. We offer competitive pay for qualified candidates.
        We provide innovative and creative benefits to attract, hire and retain top teachers and
        support staff. Our program is committed to providing high quality care to the children
        and families that we serve. We strive to recruit staff that is dedicated to a collaborative
        approach and to continued professional growth individually and as a group. We are looking for
        candidates that are committed to supporting children's learning, have strong working ethics,
        are passionate about teaching, enthusiastic, creative, reliable and to be part of a supportive team.</p>
      <h2 class=text-primary>Job Opportunities</h2>
      <p>We are looking for outstanding people to join our fantastic team! We offer great professional and career growth
        opportunities. We are inviting applications for:<br>


        Lead Teachers (Full Time and Part Time)<br>
        Assistant Teachers (Full Time and Part Time)<br>
        Support Staff (Full Time and Part Time)<br>
      <pre>
  <h4 class=text-primary>We'd love for you to be a part of our team. To apply, just 
complete the form below.</h4>
</pre>


    </div>
    <div class="col-lg-4 my-5 "  data-aos="fade-up"
    data-aos-duration="3000">
      <img class="carrer" src="v50 (1).jpg" width="90%">
    </div>
  </div>



  <div class="row px-5">
    <?php
  if(isset($_POST['btncontact']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname']; 
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $phonetype=$_POST['phonetype']; 
    $altphone=$_POST['altphone'];
    $address1=$_POST['address1']; 
    $address2=$_POST['address2']; 
    $availability=$_POST['availability']; 
    $availability2=$_POST['availability2']; 
    $city=$_POST['city']; 
    $state=$_POST['state']; 
    $zip=$_POST['zip']; 
    $qry="insert into tbcareer(fname,lname,email,phone,phonetype,altphone,address1,address2,city,state,zip,availability,availability2,currentdate)values
    ('$fname','$lname','$email','$phone','$phonetype','$altphone','$address1','$address2','$city','$state','$zip','$availability','$availability2',now())";
         if(mysqli_query($con,$qry))
         {
          echo "<script>alert('THANK YOU!')</script>";

         }
         else{
          echo mysqli_error($con);
         }


  }
  ?>

    <h2 class=text-danger> Career Inquiry Form</h2>
    <div class="col-lg-6 ">
      <form action="#" method="post">

        <label>First Name:</label><br>
        <input type="text" size="55" name="fname">
        <br>
        <label>Last Name:</label><br>
        <input type="text" size="55" name="lname">
        <br>
        <label>Email:</label><br>
        <input type="Email" size="55" name="email">
        <br>
        <label>Phone:</label><br>
        <input type="text" size="55" name="phone">
        <br>
        <label> Phone type:</label><br>


        <select name="phonetype" class="px-4">

          <option value="Home">Home</option>
          <option value="Office">Office</option>
          <option value="Mobile">Mobile</option>

        </select>
        <br>
        <label> Alt. Phone:</label><br>
        <input type="text" size="55" name="altphone">
        <br>
        <label>Address Line 1:</label><br>
        <input type="text" size="55" name="address1">
        <br>
        <label> Address Line 2:</label><br>
        <input type="text" size="55" name="address2">
        <br>
        <label>City:</label><br>
        <input type="text" size="55" name="city">
        <br><label>State:</label><br>
        <input type="text" size="55" name="state">
        <br>
        <label>Zip:</label><br>
        <input type="text" size="55" name="zip">
        <br>
    </div>

    <div class="col-lg-6">
      <h5 class="py-1" >Current Availability:</h5>
      <input type="radio" name="availability"> Full Time <br>
      <input type="radio" name="availability"> School Year Only<br>
      <input type="radio" name="availability"> Subsitute<br>
      <input type="radio" name="availability"> Part Time<br>
      <input type="radio" name="availability"> Summer Only<br>

      <h5 class="py-1">Are you currently working in child care?</h5>
      <input type="radio" name="availability2">Yes
      <input type="radio" name="availability2"> No
     <div>
      <button type="submit" size="55" name="btncontact" class="design">Submit</button>
</div>
    </div>
  </form>
  </div>
  <div class="mt-4"></div>
  <?php
  include "footer.php";?>