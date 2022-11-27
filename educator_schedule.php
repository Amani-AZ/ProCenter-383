<?php   
 include 'login_db.php';  
 $query = "select * from eduschedule WHERE `edu_name`='$_SESSION[name]'";  
 $run = mysqli_query($conn,$query);  
 ?> 
<html>
  <head>
  <title>Educator Schedule</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
   //session_start();
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


 
<!-- ---------------------------------------------- Educator Schedule part------------------------------------------------------ -->

<!-- ---------------------------------------------- End of Educator Schedule part------------------------------------------------------ -->



<!--  ------------------------------------------------ footer part------------------------------------------------------ -->
<?php include("footer.php");?>
<!--  ---------------------------------------------- End of footer part ------------------------------------------------------ -->
  
</body>
</html> 