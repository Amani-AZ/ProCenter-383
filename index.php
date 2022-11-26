<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <link href="style.css" rel="stylesheet"> -->
  <link href="style.css" rel="stylesheet">
  <script src="main.js"></script>
    
</head>
<body>


<!--------------------------------Start Header---------------------------------------->

 <header id="header" > 
    <nav id="navbar" class="navbar navbar-expand-lg   ">
        <div class="container-fluid pt-2 ">
          <a class="navbar-brand  " href="#"><img src="Pictures/Logo-clear.png" alt="ProCenter logo" class="img-fluid "></a>
          <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end  " id="navbarSupportedContent">
            <ul class="navbar-nav mr-sm-2 ">
              <li class="nav-item ">
                <a class="nav-link line" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle line" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square px-3"></i>Edit profile </a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-bell px-3"></i> Notification </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right px-3"></i>Log out </a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle line" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Educator
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Find an educator</a></li>
                  <li><a class="dropdown-item" href="#">Be an educator</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  line" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Appointment
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item " href="#">My Appointment</a></li>
                  <li><a class="dropdown-item " href="#">My materials</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link line" href="#">Workshop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link line" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link line" href="#">contact</a>
              </li>
              <!-- <li class="nav-item dropdown">
              <img class="h-100 w-100 px-5 dropdown-toggle line" src="Pictures/icons8-verified-account-64.png" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              </img>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square px-3"></i>Edit profile </a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-bell px-3"></i> Notification </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right px-3"></i>Log out </a></li>
                </ul>
              </li> -->
            </ul>
          
        </div>
        </div>
    </nav>
</header> 


<!-- ---------------------------------------------- End of header part------------------------------------------------------ -->

<!-- --------------------------------End Hero------------------------ -->
<section id="hero">
    <div class="container-fluid ">
      <div class="row justify-content-between text-white">
        <div class="col-lg-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
          <h1 class="font">
            Find your<br />
            best <b class="text-warning">Educator</b> & Book a session
          </h1>
            <h5>You can improve your performance by booking a session at the programming center!</h5>
            <button type="button" class="btn  btn-change border border-dark rounded-pill l shadow-lg  ">Find an Educator</button>
            <button type="button" class="btn  btn-change border border-light rounded-pill m shadow-lg">Be an Educator</button>
          </div>
        </div>
        
        <div class="col-lg-6 order-1 order-lg-2 " data-aos="zoom-out" data-aos-delay="300">
          <img src="Pictures/bro.png" class="img-fluid mg " alt="ProCenter image">
        </div>
      </div>
    </div>
    
  </section>
  <!------------------------------ End Hero ------------------------------------>
  

<!----------------------------------Start About Section-------------------------------------------->
  <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6  d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <img src="Pictures/Presentation-amico.png" alt="" class="img-fluid rounded-circle">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3>What ProCenter Offer to Computer Science and Engneering? </h3>
            

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
    <!---------------------------End About Section----------------------------->



    <!-- ----------------------Our Educators------------------ -->
   <section class="educator">
   <div class="row">
    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch pt-5 px-lg-5" data-aos="fade-left">
          <h3>Our Educators </h3>
</div>
</section>



<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- -----------------------------end Educator section----------------------- -->





  <!---------------------------------------Footer-------------------------------------------->
  <footer id="footer" class="text-center footer text-white">
    <div class="container-fluid ">
        <div class="row pb-5">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto ">
          <h3 class="text-uppercase font-weight-bold"><i class="bi bi-geo-alt"></i> Our Address</h3>
          <p>Yanbu University College (Female Campus)·</p>
             <p> Department of Computer Science.</p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto ">
            <h3 class="text-uppercase font-weight-bold"><i class="bi bi-envelope px-2"></i>Email Us at</h3>
            <p>ProCenter@gmail.com</p>
          </div>
   </div>
      <hr class="pt-5">
      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <div class="p-3"><h6>© 2020 Copyright</h6></div>
          </div>
    </section> 
    </div>
  </footer>
  <!------------------------------------------End footer---------------------------------->

</body>
<html>