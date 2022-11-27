<html>
    <title>Admin Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
    <link href="style 1.css" rel="stylesheet">
<body>
<?php 
    session_start();
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
 <!-- ---------------------------------------------- Requests part------------------------------------------------------ -->
 <div class="schedule container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title text-white p-2">Contact Messages</h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table text-white" style="padding:0;">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>id</th>
                                    <th>subject</th>
                                    <th>Message</th>
                                </tr>
                                <?php
                                include 'db_con.php';
                                $query="select * from contact"; // Fetch all the data 
                                $run = mysqli_query($conn, $query);
                                if ($num = mysqli_num_rows($run)>0){  
                                while ($row = mysqli_fetch_assoc($run)) {  
                                ?>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <?php echo $row['fname']; ?>
			                        <?php echo $row['lname']; ?>
                                    </td>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['subject']; ?></td>
                                    <td><?php echo $row['message']; ?></td>                             
                                </tr>
                                <?php }}
                                else{
                                ?>
                                <tr>
                                <td colspan="5" rowspan="1" headers="" class="w3-center">No message is found</td>
                                </tr>
                                <?php
                                } ?>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
 <!-- ----------------------------------------------End of Requests part------------------------------------------------------ -->

<!--  ------------------------------------------------ footer part ------------------------------------------------------ -->
<?php include("footer.php");?>
<!--  ---------------------------------------------- End of footer part part------------------------------------------------------ -->
</body>
</html> 