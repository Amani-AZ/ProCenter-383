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
          $to = "3910191@stu.rcyci.edu.sa";
          $subject = 'Canceled Appointment';
          // $content = "Your appointment is canceled !\n\nAppointment Details: \n\nEducator Name: ".$name."\nCourse: ".$coures."\nDate: ".$date. "\nTime: ".$time;
          $headers = array(
               "MIME-Version" => "1.0", 
               "Content-Type" =>"text/html;charset=UTF-8",
               "From" =>"arwa.tammar@gmail.com",
               "Reply-To" =>"arwa.tammar@gmail.com"
          );

          //*** Show the result... ***//

          ob_start();
          include("mail_edudelete_template.php");
          $message = ob_get_contents();
          ob_get_clean();

          if (mail($to, $subject, $message, $headers))
          {
               echo "<script> 
                              alert('Your appointment is canceled!');
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