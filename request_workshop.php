<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Request Workshop</title>

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
<!-- ================ Start of about the workshop ================ -->
<section>
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h2 class="fw-bold">How to orgnize a workshop?</h2>
            <h4>You can create your own <span class="fw-bold" style="color: #0277ff;">workshop</span> with a <span class="fw-bold" style="color: #0277ff;">collaborative learning</span> experience, that your students will stay for, andpay </span>for. </h4>
            <p class="lead text-muted">Easily package and present your expertise to share with students on their schedule.</p>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center">
          <img src="pictures/workshops.svg" class="img-fluid" alt="introducing workshops">
        </div>

      </div>
    </div>

</section>
<!-- ================ End of about the workshop ================ -->

 <!-- ================ Start of Request workshop Section ================ -->
 <section class="p-4 my-4" style="background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #0277ff 100%);">
  <div class="container-fluid" data-aos="fade-up">

    <div class="text-center">
      <h3 class="text-white fw-bold">Request a Workshop</h3>
    </div>
    <div class="row">
      <div class="col-lg-4 offset-lg-1">
        <div class="map my-4">
          <img src="Pictures/Certification-bro.svg" alt="Request a workshop">
        </div>
      </div>

      <div class="col-lg-5 offset-lg-1 mt-4">
        <div>
          <form method="post">
            <div class="row">
              <div class="form-group col-lg-4 my-2">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
              </div>
              <div class="form-group col-lg-4 my-2">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
              </div>
              <div class="form-group col-lg-4 my-2">
                <input type="text" name="id" class="form-control" id="id" placeholder="ID" required>
              </div>
              
            </div>
            <div class="form-group my-3">
              <input type="text" class="form-control" name="title" id="title" placeholder="workshop title" required>
            </div>
            <div class="row my-2">
                <div class="col-md-4 my-3">
                    <label for="paid" class="form-label text-white">Payment method</label>
                    <select id="paid" class="form-select">
                        <option selected>Is it Paid?</option>
                        <optgroup label="Yes">
                            <option value="100">100 SR</option>
                            <option value="200">200 SR</option>
                            <option value="300">300 SR</option>
                            <option value="400">400 SR</option>
                            <option value="500">500 SR</option>
                        </optgroup>
                        <optgroup label="No">
                            <option value="Free">0 SR</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group  col-md-4 my-3">
                    <label for="time" class="form-label text-white">Workshop time</label>
                    <input type="time" class="form-control" name="Time" id="Times" placeholder="Time" required>
                </div>

                <div class="form-group  col-md-4 my-3">
                    <label for="Date" class="form-label text-white">Workshop Date</label>
                    <input type="Date" class="form-control" name="Date" id="Date" placeholder="Date" required>
                </div>

            </div>
            <div class="form-group my-3">
              <textarea class="form-control" name="description" rows="5" placeholder="short description of the workshop" required></textarea>
            </div>
            <div class="d-grid">
              <button type="submit" type="button" class="btn btn-lg btn-block rounded-5 bg-light" style="color: #0277ff;">Send the request</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- ================ End of Request workshop Section ================ -->

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