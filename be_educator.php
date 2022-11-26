<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Be Educator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/assets/js/aos.css" rel="stylesheet">
  </head>
<body>
<?php 
    session_start();
    if (!isset($_SESSION['college_id']))
    header("Location: login.php");
?>
<!-- ----------------------------------------------------header part------------------------------------------------------ -->
<?php 
    include "login_db.php";
    // if( $_SESSION["user_type"] == 'student') {
    //      include ("student_header.php");
    //   } 
    // else if($_SESSION["user_type"] == 'admin') {
    //      include ("admin_header.php");
    //   }
    // else if ($_SESSION["user_type"] == 'educator')
    // {
    //     include ("educator_header.php");
    // }
?>
<!-- ---------------------------------------------- End of header part------------------------------------------------------ -->

<!-- =======Start of about the Volunteer Students======= -->
<section  style=" background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="Pictures/Book_reader.svg" class="img-fluid" alt="girl reading book">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-white fw-bold">How to be a Volunteer Student ?</h3><br>
          <h4 class="text-white">On ProCenter, you help students improve their performance and skills in face-to-face sessions. <br><br>You might be able to talk with a university student from chatlive, upload materials to them, etc.</h4>
          <p class="lead text-white-50">Your tutoring sessions can begin at any time based on your schedule. Whatever works for you.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- =======End of about the Volunteer Students======= -->
<!-- ======= Start of Request to be Volunteer ======= -->

<section class="p-4 my-4 ">
<div class="container-fluid" data-aos="fade-up">
  <div class="text-center">
    <h3>Be a Volunteer Student</h3>
    <p class="lead">Registration Form</p>
  </div>

<div class="row" >
<div class="col-lg-5 offset-lg-1 mb-4" >

<div>
<div >
<?php 
 include 'db_con.php';  
 $query = "select * from requests";  
 mysqli_query($conn,$query); 
 if(isset($_POST['submit']))
 {
     $fname=$_POST['FN'];
     $lname=$_POST['LN'];
     $id=$_POST['ID'];
     $level=$_POST['level'];
     $subject=$_POST['subject'];
     $GPA=$_POST['GPA'];
     $sql="insert into requests(fname,lname,id,subject,level,GPA) values('$fname','$lname','$id','$subject','$level','$GPA')";
     if( mysqli_query($conn,$sql)){
       echo "<script>alert('Your Request has been sent.');</script>";
     }
     else
     {
        echo "<script>alert('Could not send the Request!');</script>";
     }
 }
?>
  <form action="" method="post" class="row my-5"> 
              <div class="col-md-4 my-md-3">
                <label for="FN" class="form-label">First Name</label>
                <input type="text" class="form-control" name="FN" required>
              </div>
              <div class="col-md-4 my-md-3">
                <label for="LN" class="form-label" >Last Name</label>
                <input type="text" class="form-control" name="LN" required>
              </div>
              <div class="col-md-4 my-md-3">
                <label for="ID" class="form-label" >id number</label>
                <input type="number" class="form-control" name="ID" required>
              </div>
              <div class="col-md-3 my-md-3">
                <label for="GPA" class="form-label">GPA</label>
                <input type="text" class="form-control" name="GPA"  placeholder="GPA" required>
              </div>
              <div class="col-md-5 my-md-3">
                <label for="level" class="form-label" >Level</label>
                <select  class="form-select" name="level" required>
                <option disabled selected hidden>Select Your level</option>
                  <option>First-Year</option>
                  <option>Sophomore</option>
                  <option>Junior</option>
                  <option>Senior</option>
                </select>
              </div>
              <div class="col-md-4 my-md-3">
                <label for="subject"  class="form-label" >Subject</label>
                <input type="text" class="form-control" name="subject"  required>
              </div>
              <div class="d-grid">
                <button type="submit" name="submit"  class="my-4 btn btn-primary btn-lg btn-block rounded-5 " style=" background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);">Send the Request</button>
              </div>
        </div>
  </form>
      
</div>
      
  </div>
  <div class="col-lg-4 offset-lg-1">
    <div class="map mb-4 mb-lg-0">
      <img src="Pictures/Raising hand.svg" alt="Volunteer raising hand">
    </div>
  </div>

 </div>
</div>
</section>
<!-- ======= End of Request to be Volunteer ======= -->
<!-- ========================== Start Of javaScript files  ========================== -->
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/glightbox.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- ========================== End of javaScript files  ========================== -->
</body>
</html>