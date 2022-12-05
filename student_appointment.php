<html>
  <head>
    <title>Student Appointment</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
    <!-- fontawesome for icons -->
    <!-- <script src="https://kit.fontawesome.com/f67ca12063.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="style 1.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f67ca12063.js" crossorigin="anonymous"></script>
    <link href="style 1.css" rel="stylesheet">
    <script src="main.js"></script>


  </head>
  <body>

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
    <div class="schedule container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title text-white p-2">My Appointments</h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Educator Name</th>
                                    <th>Course</th>
                                    <th> Date</th>
                                    <th> Time</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include 'db_con.php';
                                $query="select * from `StuSession` WHERE `stuid`='$_SESSION[college_id]'"; // Fetch all the data from the table 
                                $result1 = mysqli_query($conn, $query);
                                $t=1;
                                ?>
                                 <?php if (mysqli_num_rows($result1) > 0): ?>
                                <?php  while ($result = mysqli_fetch_assoc($result1)) {
                                    
                                    echo "  
                                        <tr class='data'>  
                                        <td>".$t."</td>  
                                        <td id='eduName'>".$result['eduName']."</td> 
                                        <td id='course'>".$result['course']."</td>  
                                        <td id='date'>".$result['date']."</td>  
                                        <td id='time'>".$result['time']."</td> 
                                        <td><a  data-id=\"".$result['app_no']."\"class='btn delete btn-primary rounded'><i class='fa fa-close  Edit-out-logo-size' ></i> Cancel</a></td> 
                                        </tr>  
                                    ";  
                                    $t++;
                                }  
                                ?>
                                <?php else: ?>
                                        <tr>
                                        <td colspan="6" rowspan="1" headers="" class="text-center">No Appointment is Found</td>
                                        </tr>
                                <?php endif; ?>
                                <?php mysqli_free_result($result1); ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 <script>
  // for deleting new appointment
    $(document).ready(function(){
    $(".delete").click(function(){
      var del_id = $(this).data('id');
      var edu=document.getElementById('eduName').innerHTML;
      var course=document.getElementById('course').innerHTML;
      var date=document.getElementById('date').innerHTML;
      var time=document.getElementById('time').innerHTML;

      var parent = $(this).parent().parent();
      $.ajax({
              type:"GET",
              url:"db_studelete.php?app_no="+del_id,
              data:{"stuid":del_id,"eduName":edu,"course":course,"date":date,"time":time},
              success:function(data) {
                  if(data) { // Sucess
                    parent.slideUp("fast",function() {
                    parent.remove();}); 
                  } 
                  else { // Error 
                  }
              }
            });
            });
        });
</script>
    <?php include("footer.php");?>
    </body>
</html>
