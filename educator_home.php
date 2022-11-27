<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <script>
      function redirectCreateSch(){
        window.location  = "educator_schedule.php";
      }
      function redirectViewApp(){
        window.location  = "educator_appointment.php";
      }
    </script>
</head>
<body>

<?php 
    session_start();
    if (!isset($_SESSION['college_id']))
    header("Location: login.php");
?>

<!--------------------------------------------------Start Header-------------------------------------------------------------->
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


<section id="hero">
    <div class="container-fluid ">
      <div class="row justify-content-between text-white">
        <div class="col-lg-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center mx-5">
          <div data-aos="zoom-out">
          <h1>
            Find your<br />
            best <b class="text-warning">Educator</b> & Book a session
          </h1>
            <h6>You can improve your performance by booking a session at the programming center!</h6>
            <button onclick="redirectCreateSch()" class="btn  btn-change border border-dark rounded-pill l shadow-lg  ">Create Schedule</button>
            <button onclick="redirectViewApp()" class="btn  btn-change border border-light rounded-pill m shadow-lg">View Appointment</button>
          </div>
        </div>
        
        <div class="col-lg-6 order-1 order-lg-2 " data-aos="zoom-out" data-aos-delay="300">
          <img src="Pictures\bro.png" class="img-fluid mg " alt="ProCenter image">
        </div>
      </div>
    </div>
    
  </section>

  <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6  d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <img src="Pictures\Presentation-amico.png" alt="learning" class="img-fluid rounded-circle">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3>What ProCenter Offer ? </h3>
            

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bi bi-lightbulb"></i></div>
              <h4 class="title">Better Performance</h4>
              <p class="description"> effective session to gain valuable knowledge from teachers and our best students</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bi bi-search-heart"></i></div>
              <h4 class="title">Personal Teacher</h4>
              <p class="description">You can choose your best teacher to improve your performance</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4 class="title">CSE Courses</h4>
              <p class="description">We offer wide range of courses for all CSE students</p>
            </div>

          </div>
        </div>

      </div>
    </section>

  <section id="our-educator">
    <div class="icon-box px-5"><h2>Our educators</h2></div>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next " type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon " aria-hidden="true"></span>
      <span class="visually-hidden  ">Next</span>
    </button>
  </div>
  </section>

  <?php include("footer.php");?>
    

</body>
<html>