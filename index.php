<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSE ProCenter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="style 1.css">
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

<section id="hero" >
    <div class="container-fluid ">
      <div class="row justify-content-between text-white">
        <div class="col-lg-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center mx-5">
          <div data-aos="zoom-out">
          <h1>
            Find your<br />
            best <b class="text-warning">Educator</b> & Book a session
          </h1>
            <h6>You can improve your performance by booking a session at the programming center!</h6>
            <button onclick="redirectFindEdu()" class="btn  btn-change border border-dark rounded-pill l shadow-lg  ">Find an Educator</button>
            <button onclick="redirectBeEdu()" class="btn  btn-change border border-light rounded-pill m shadow-lg">Be an Educator</button>
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
          <h5><b>What ProCenter Offer ?</b> </h5>
            

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


<section id="slider" class="pt-5">
  <div class="container">
   <div class="icon-boxes"><h5 class="text-center "><b>ProCenter Educators</b></h5></div> 
      <div class="slider">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="images/slide-1.jpg" alt="" >
                        </div>
                        <h5 class="mb-0 text-center "><b>Dr. Kajal Khan</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="images/slide-2.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Dr. Manal Aburizaiza</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="images/slide-3.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Ms. Aizal Idris</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="images/slide-4.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Ms. Omamah Hawsawi</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="images/slide-5.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Ms. Wafa Alraddadi</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                </div>
            </div>
  </div>
</section>
<?php include("footer.php");?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script src="carousel/owl.carousel.min.js"></script>
    <script src="carousel/carousel.js"></script>
</body>
</html>