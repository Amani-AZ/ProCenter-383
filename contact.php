<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <!-- CSS Files -->
  <link href="/assets/js/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="style 1.css" rel="stylesheet">
</head>
<body>
<?php 
session_start();
if (!isset($_SESSION['college_id']))
header("Location: login.php");
?>
 <!-- ----------------------------------------------------header part------------------------------------------------------ -->
 <?php include("login_db.php");
    if( $_SESSION["user_type"] == 'student') {
         include ("student_header.php");
      } 
    else if($_SESSION["user_type"] == 'admin') {
         include ("admin_header.php");
      }
    else if ($_SESSION["user_type"] == 'educator')
    {
        include ("educator_header.php");
    }
    ?>
  <!-- ---------------------------------------------- End of header part------------------------------------------------------ -->
 <!--  ========================== Start of Contact Section  ========================== -->
<section id="contact">
  <div class="container-fluid" data-aos="fade-up">
    <div >
      <h3 class="text-center display-6  my-3">Contact Us</h3>
      <p class="lead text-center text-capitalize">We would love to hear from you.</p>
    </div>
    <div class="row">
      <div class="col-lg-4 offset-lg-1">
        <div class="map mb-4 mb-lg-0">
          <img src="Pictures/Contact us.svg" alt="Contact Us">
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 mt-4">
        <div class="row my-3">
        </div>

        <div class=" my-2 ">
        <?php 
        include 'db_con.php';  
        $query = "select * from contact";  
        mysqli_query($conn,$query); 
        if(isset($_POST['submit']))
        {
            $fname=$_POST['first'];
            $lname=$_POST['last'];
            $id=$_POST['id'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            $sql="insert into contact(fname,lname,id,subject,message) values('$fname','$lname','$id','$subject','$message')";
            if( mysqli_query($conn,$sql)){
              echo "<script>alert('Your message has been sent.');</script>";
            }
            else
            {
              echo "<script>alert('Could not send the message!');</script>";
            }
            
        }
        ?>
          <form action="" method="post" >
            <div class="row">
              <div class="form-group col-lg-4">
                <input type="text" name="first" class="form-control" placeholder="First Name" required>
              </div>
              <div class="form-group col-lg-4">
                <input type="text" name="last" class="form-control" placeholder="Last Name" required>
              </div>
              <div class="form-group col-lg-4">
                <input type="text" name="id" class="form-control"  placeholder="ID" required>
              </div>
              
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="d-grid">
              <button type="submit" name="submit" class=" btn btn-primary btn-lg btn-block rounded-5 my-3" style=" background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);">Send Message</button>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ========================== End of Contact Section ========================== -->

<?php include("footer.php");?>


<!-- ========================== Start Of javaScript files  ========================== -->
  <script src="/assets/js/aos.js"></script>
  <script src="/assets/js/aos.js"></script>
  <script src="/assets/js/glightbox.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- ========================== End of javaScript files  ========================== -->

</body>

</html>