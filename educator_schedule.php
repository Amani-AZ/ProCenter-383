<html lang="en">
  <head>
    <title>Educator Schedule</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
    <!-- fontawesome for icons -->
    <script src="https://kit.fontawesome.com/f67ca12063.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">

    <style> 
        input[type=date] {
          height:40px;
          border: 2px solid #ccc;
          border-radius: 6px;
          font-size: 16px;
          color: rgb(97, 94, 94);
          background-color: white;
          padding: 12px 20px 12px 15px;
        }
        input[type=time] {
          height:40px;
          border: 2px solid #ccc;
          border-radius: 6px;
          font-size: 16px;
          color: rgb(97, 94, 94);
          background-color: white;
          padding: 12px 20px 12px 20px;
        }
        input[type=text] {
          height:40px;
          border: 2px solid #ccc;
          border-radius: 6px;
          font-size: 16px;
          color: rgb(97, 94, 94);
          background-color: white;
        }
        </style>
  </head>
  
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


  <body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title text-white">Educator Schedule</h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th style="padding-left: 70px;">Course</th>
                                    <th style="padding-left: 15px;">Appointment Date</th>
                                    <th style="padding-left: 0px; margin-left:0px;">Available Time</th>
                                    <th>Add new appointment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding-left: 70px;">
                                        <div class="col-8">
                                            <input class="form-control form-control-lg" type="text" placeholder="Course Name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-4">
                                            <input type="date" id="date" name="date">
                                        </div>
                                    </td>
                                    <td style="padding-left: 1px;">
                                        <div class="col-4">
                                            <input type="time" id="appt" name="appt">
                                        </div>
                                    </td>                                    
                                    <td>
                                        <div class="col-4">
                                            <ul class="action-list">
                                                <li><a href="#" data-tip="add"><i class="fa-sharp fa-solid fa-plus" style="padding-left:80px;"></i></a></li>
                                            </ul>
                                        </div>
                                    </td>                                
                                </tr>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    </body>
</html>

<!-- ---------------------------------------------- End of Educator Schedule part------------------------------------------------------ -->



<!--  ------------------------------------------------ footer part------------------------------------------------------ -->
<?php include("footer.php");?>
<!--  ---------------------------------------------- End of footer part ------------------------------------------------------ -->
  
</body>
</html> 