<?php
 include 'db_con.php';  
 if (isset($_GET['app_no'])) {  
      $appNum = $_GET['app_no'];  
      $query = "DELETE FROM `stusession` WHERE  app_no = '$appNum' ";  
      $run = mysqli_query($conn,$query);
      if ($run) {  
         header('location:student_appointment.php');  
      }
      else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 } 
?>