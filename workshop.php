<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CSE Workshops</title>
  <link href="/assets/js/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="style 1.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
<?php 
    session_start();
    if (!isset($_SESSION['college_id']))
    header("Location: login.php");
   ?>

<!--------------------------------Start Header---------------------------------------->
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
     <!-- ===================== Start of Workshop Section ===================== -->
     <section>

        <div class="container" data-aos="fade-up">
  
          <header class="text-center display-6 fw-bold">
            <h3>Workshops form CSE department</h3>
          </header>
  
          <div class="row my-4">
            <div class="col-lg-4 workshop">
              <div class="post-box box-shadow ">
                <div class="post-img"><img src="Pictures/hardware.jpg" class="img-fluid" alt="hardware workshop"></div>             
                <div style="color: #0277ff ;font-weight:bold; font-size:1.3rem">0<sup>SR</sup>
                </div>
                <span>Tue, September 15</span>
                <p class="card-body">Learn more about the hardware and the equipment to design a circuit</p>
                <button type="submit" type="button" class=" btn btn-primary btn-lg btn-block border-0 rounded-5" style=" background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);">Register Now</button>
              </div>
            </div>
  
            <div class="col-lg-4  ">
              <div class="post-box box-shadow">
                <div class="post-img"><img  src="Pictures/programming.jpg" class="img-fluid" alt="programming workshop"></div>             
                <div style="color: #0277ff ;font-weight:bold; font-size:1.3rem">300<sup>SR</sup>
                </div>
                <span>Wed, November 30</span>
                <p class="card-body">Learn about web development using languages such as HTML, JavaScript,and CSS plus and Python</p>
                <button type="submit" type="button" class=" btn btn-primary btn-lg btn-block border-0 rounded-5" style=" background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);">Register Now</button>
              </div>
            </div>
            <div class="col-lg-4 ">
              <div class="post-box box-shadow">
                <div class="post-img"><img  src="Pictures/ux_course.jpg" class="img-fluid" alt="ui/ux workshop"></div>             
                <div style="color: #0277ff ;font-weight:bold; font-size:1.3rem">500<sup>SR</sup>
                </div>
                <span>Mon, November 26</span>
                <p class="card-body">ui/ux course to provide you more abour how to design a user interface design for application and web development</p>
                <button type="submit" type="button" class=" btn btn-primary btn-lg btn-block border-0 rounded-5" style=" background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);">Register Now</button>
              </div>
            </div>
          </div>
        </div>
      </section>
     <!-- ===================== Start of Workshop Section ===================== -->
  
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