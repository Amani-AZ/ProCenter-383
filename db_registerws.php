<?php   
include 'db_con.php';  
 if (isset($_GET['stu_id'])) {  
      $stu_id = $_GET['stu_id']; 
      $stu_name = $_GET['stuName']; 
      $edu_id = $_GET['edu_id'];
      $whorkshop_name = $_GET['workshopName'];
      $query = "insert into registerws (stu_id,stuName,edu_id,workshopName) values('$stu_id','$stu_name','$edu_id','$whorkshop_name')"; 
      $run = mysqli_query($conn,$query);  
      if ($run) {  
         echo "
         <script> 
         alert('You have registered successfully');
         window.location.href='workshop.php'; </script>";

        }
      else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 } 

?>
