<?php
 include 'db_con.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];
      $name = $_GET['edu_name'];
      $Coures = $_GET['course'];
      $Date = $_GET['date'];
      $Time = $_GET['time'];  
      $query = "DELETE FROM `eduschedule` WHERE id = '$id'"; 

      $run = mysqli_query($conn,$query);
      if ($run) {  
         //header('location:student_appointment.php'); 
          $to = "3910863@stu.rcyci.edu.sa";
          $subject = 'Canceled Appointment';
          //$content = "Your appointment is canceled!!\n\nAppointment Details:\n\nEducator Name: ".$name." \nCourse: ".$Coures."\n\nDate: ".$Date. "\nTime: ".$Time;
          $headers = array(
               "MIME-Version" => "1.0", 
               "Content-Type" =>"text/html;charset=UTF-8",
               "From" =>"arwa.tammar@gmail.com",
               "Reply-To" =>"arwa.tammar@gmail.com"
          );

          //*** Show the result... ***//

          ob_start();
          include("mail_studelete_template.php");
          $message = ob_get_contents();
          ob_get_clean();

          if (mail($to, $subject, $message, $headers))
          {
               echo "<script> 
			          window.alert('Your appointment is canceled!');
			          window.location.href='student_appointment.php'; 
		          </script>";
          } 
          else 
          {
               echo "<script> 
                          window.alert('ERROR');
                          window.location.href='student_appointment.php'; 
                    </script>";
          } 
      }
      else{ 
           echo "Error: ".mysqli_error($conn);  
      }  
 } 
?>