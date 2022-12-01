<html>
  <head>
    <title>Educator workshops</title>

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
    <link href="style 1.css" rel="stylesheet">

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
                                <h3 class="title text-white p-2">My Workshop Requests</h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table text-white" style="padding:0;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>workshop title</th>
                                    <th>date</th>
                                    <th>time</th>
                                    <th>Price</th>
                                    <th>short desciption</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                                <tr>
                                <form method="post" action="">
        <?php
   

        include "db_con.php";
        $query="select * from requestws  where `edu_name`='$_SESSION[name]'" ; // Fetch all the data 
        $result = mysqli_query($conn, $query);
        $i = 1;
        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $title = $row['Workshop_name'];
                $date = $row['date'];
                $time = $row['time'];
                $price = $row['price'];
                $description = $row['description'];
                $status = $row['STATUS'];
                echo "<td>".$i."</td>";
                echo "<td>{$title}</td>";
                echo "<td>{$date}</td>";
                echo "<td>{$time}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$description}</td>";
                if ($status==1){
                echo "<td>Approved</td>";
                }
                else{
                echo "<td>DisApproved</td>";
                }  
                echo "</tr>";
                $i++;
            }
        }
        else{
            echo '<td colspan="7" rowspan="1" headers="" class="text-center">No workshop is Found</td>';
            echo "</tr>";
        }
        // mysqli_free_result($result);
    
?>
</form>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>
    </body>
</html>
