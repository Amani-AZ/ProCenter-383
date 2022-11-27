<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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


<!----------------------------------Start About Section-------------------------------------------->
<section id="scroll" >
            <div class="container px-5  " style="padding-top: 40px;">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div ><img class="img-fluid rounded-circle" src="Pictures/Presentation-amico.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div >
                            <section class="item-wrapper float-end box-shadow py-5 img-fluid img-responsive card" style="background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #0278ff 100%);
    color:white;">
                            <h2 class="fs-1 text-center pt-2 pb-3"><b>About Us</b></h2> 
                             <p class="text-center px-5 mx-5">CSE ProCenter provides a variety of services for the computer science and engineering department at Yanbu university college.</p>  
                          </section>
                        </div>
                    </div>
                </div>
            </div>
            
            <br>

            

        <!-- Content section 2-->
       
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 ">
                        <div ><img class="img-fluid rounded-circle" src="Pictures/Course app-amico.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div >
                        <section class="item-wrapper float-end box-shadow py-5  img-responsive card" style="background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #0278ff 100%);
    color:white;">
                            <h2 class=" pt-2 pb-3 text-center"><b>Book a session with our educator</b></h2><!--color-->
                            <p class="px-5 mx-5 text-center"> With our sessions, it is easier for students to reach to the right educators and <br>schedule an appointment at a convenient time to improve their knowledge and perform better in the exams. </p>
                        </section>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Content section 3-->
        
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div ><img class="img-fluid rounded-circle" src="Pictures/Exams-rafiki.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div >
                        <section class="item-wrapper float-end box-shadow py-5 img-fluid img-responsive card" style="background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #0278ff 100%);
    color:white;">
                        <h2 class=" pt-2 pb-3 text-center"><b>Our Programming Center</b></h2><!--color-->
                            <p class="px-5 mx-5 text-center">The programming center of the CSE department aimed to help the students in case they need extra help in some courses.<br>
        It provided a practical session delivered by excellent students and teachers.</p>
                        </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!---------------------------End About Section----------------------------->


  <!---------------------------------------Footer-------------------------------------------->
  <?php include("footer.php");?>
  <!------------------------------------------End footer---------------------------------->

</body>
<html>