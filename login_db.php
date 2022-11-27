<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }  //start the session
include_once("db_con.php");
if(isset($_POST['sub']))//check wheather the user click on log in button
{          
            $userid= $_POST["college_id"];
            $pass= $_POST["password"];
             
           $sql=mysqli_query($conn,"SELECT * FROM `login` WHERE `college_id`='$userid' AND `password`='$pass'");
            $row  = mysqli_fetch_array($sql);//mysqli_fetch_array() function fetches(mean get) a result row as an associative array, a numeric array, or both.
            if(is_array($row))//The is_array() function checks whether a variable is an array or not.
            {
                $_SESSION["college_id"] = $row['college_id'];//Session variables are set with the PHP global variable: $_SESSION.
                $_SESSION["password"]=$row['password'];
                $_SESSION["name"]=$row['name'];
                $_SESSION["user_type"]=$row['user_type']; 
              
                    if( $_SESSION["user_type"] == 'student')
                    {
                        header("location: index.php");
                    } 
                    if( $_SESSION["user_type"] == 'educator')  
                    {
                        header("location: educator_home.php");
                    }
                    if( $_SESSION["user_type"] == 'admin')  
                    {
                        header("location: admin_requests.php");
                    }

            }
               
            else
            {
                //$message="Invalid Username or Password!";
                echo "<script> 
                window.alert('Invalid Username or Password!');
                window.location.href='login.php'; </script>";
               
            }
           
             
        }


   
?>