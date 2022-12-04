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
          <?php
            include 'db_con.php';
            $query="select * from requestws where STATUS=1"; // Fetch all data
            $result1=mysqli_query($conn,$query);
            ?>
            <?php if (mysqli_num_rows($result1) > 0): ?>
            <?php while($result=mysqli_fetch_assoc($result1)): 
                // if ($result['STATUS']==1){?
                ?>
            <div class="col-lg-4 workshop" >
              <div class="card  post-box box-shadow "style='border-color: #FF3CAC;'>
              <div class="text-center" ><h3 style="color: #784BA0 ;font-weight:bold;"><?php echo $result['Workshop_name'] ?><h3></div>
              <div  style="color: #FF3CAC ;font-weight:bold; font-size:1.2rem">presented by <?php echo $result['edu_name'] ?></div>  
              <!-- <div style="color: #0277ff ;font-weight:bold; font-size:1.3rem"> -->
              <?php //echo $result['price'] ?>
              <!-- <sup>SR</sup></div> -->
              <span style="color: #0277ff ;font-weight:bold; font-size:1rem">On <?php echo $result['date'] ?></span>
              <span style="color: #0277ff ;font-weight:bold; font-size:1rem">At <?php echo $result['time'] ?></span>
              <p class="card-body "><?php echo $result['description'] ?></p>
              <?php 
              echo "<div class='btn btn-primary text-white btn-lg btn-block border-0 rounded-5' style='background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);'>
              <a href='db_registerws.php?stu_id=".$_SESSION['college_id']."&edu_id=".$result['edu_id']."&workshopName=".$result['Workshop_name']."&stuName=".$_SESSION['name']."' class='text-white'>Register Now</a></div>";
              ?> 
              </div>
             
            </div>
            <?php endwhile; ?>
            <?php else: ?>
                  <h3 class="text-center">No workshop is found</h3>
            <?php endif; ?>
            <?php mysqli_free_result($result1); ?>


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