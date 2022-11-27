<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <link href="style.css" rel="stylesheet"> -->
  <link href="style 1.css" rel="stylesheet">
  <script src="main.js"></script>
    
</head>
<body>


<!--------------------------------Start Header---------------------------------------->

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





<section id="educator">
<div class="container-fluid pt-5 padding-top ">
    <div class="row text-center justify-content-center p-5">
        <div class="col-md-3 card m-3 box-shadow" style="width:350px">
          <div class="card-body ">
              <h2 class="card-title pt-4">Ms. Aizal</h2>
              <p class="card-text">For developers who only require the theme HTML/CSS files</p>
              <h2 class="pb-4">$29</h2>
              <button type="button" class="btn btn-danger p-3 w-100">Buy Now</button>
              <div class="h6">
              <p class="pt-5">1 Domain</p><hr>
              <p>1 Team Member</p><hr>
              <p>Free Apps Only</p><hr>
              <p>HTML/CSS Only</p><hr>
              <p>Email Support</p>
            </div>
            </div>
        </div>
        
        <div class="col-md-3 card m-3 box-shadow" style="width:350px">
          <div class="card-body">
              <h2 class="card-title pt-4">Dr. Manal</h2>
              <p class="card-text">For small teams creating products that require end users to pay</p>
              <h2 class="pb-4">$149</h2>
              <button type="button" class="btn btn-danger p-3 w-100">Buy Now</button>
              <div class="h6">
              <p class="pt-5">1 Domain</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Up to 5 Team Members</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Paid Apps Allowed</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Full Source Files *</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Email Support(24 Hour Turnaround)</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 card m-3 box-shadow " style="width:350px">
          <div class="card-body">
              <h2 class="card-title pt-4">Ms. City</h2>
              <!-- <p class="card-text">Cs383</p> -->
              <h3 class="pb-4">$Cs383</h3>
              <button type="button" class="btn btn-danger p-3 w-100">Buy Now</button>
              <div class="h6">
              <p class="pt-5">1 Domain</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Up to 15 Team Members</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Paid Apps Allowed</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Full Source Files *</p><hr>
              <p><i class="bi bi-arrow-up-circle-fill float-start  text-success"></i>Dedicated Piority Support</p>
            </div>
            </div>
        </div>
    </div>
</div>

</section>
  <!---------------------------------------Footer-------------------------------------------->
  
  <?php include("footer.php");?>
  <!------------------------------------------End footer---------------------------------->

</body>
<html>