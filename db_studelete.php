<?php
 include 'db_con.php';  
 if (isset($_GET['app_no'])) {  
      $appNum = $_GET['app_no'];
      $name = $_GET['eduName'];
      $coures = $_GET['course'];
      $date = $_GET['date'];
      $time = $_GET['time'];  
      $query = "delete from StuSession  WHERE app_no = '$appNum'"; 
      $run = mysqli_query($conn,$query);
      
      if ($run) {  
         //header('location:student_appointment.php'); 
          $to = "3910863@stu.rcyci.edu.sa";
          $subject = 'Canceled Appointment';
          $content = "Your appointment is canceled !\n\nAppointment Details: \n\nEducator Name: ".$name."\nCourse: ".$coures."\nDate: ".$date. "\nTime: ".$time;
          $headers = "From: Your-Email\r\n";
          //*** Show the result... ***
          if (mail($to, $subject, $content, $headers))
          {
               echo "
               <script> 
                  window.alert('Your appointment is canceled!');
                  window.location.href='student_appointment.php'; 
               </script>";
          } 
          else 
          {
               echo "<script> 
                          alert('ERROR');
                          window.location.href='student_appointment.php'; 
                    </script>";
          } 
      }
      else{ 
           echo "Error: ".mysqli_error($conn);  
      }  
 } 
?>