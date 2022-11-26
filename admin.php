<html>
  <head>
    <title>Admin Requests Schedule</title>

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

  </head>
  <body>

    <div class="schedule container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title text-white p-2">The Requestes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table text-white" style="padding:0;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="stuName">Student Name</th>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Level</th>
                                    <th>GPA</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <form method="post" action="">
        <?php
   

        include "db_con.php";
        $query="select * from Requests"; // Fetch all the data 
        $result = mysqli_query($conn, $query);
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {

            $sName = $row['fname'];
            $lName = $row['lname'];
            $Id = $row['id'];
            $subject = $row['subject'];
            $level = $row['level'];
            $GPA = $row['GPA'];
            $status = $row['status'];
            echo "<td>".$i."</td>";
            echo "<td>{$sName} ";
            echo "{$lName}</td>";
            echo "<td>{$Id}</td>";
            echo "<td>{$subject}</td>";
            echo "<td>{$level}</td>";
            echo "<td>{$GPA}</td>";
            if ($status==1){
              echo "<td>Allowed</td>";
            }
            else{
              echo "<td>Denied</td>";
            }  
            echo "<td><button class='w3-btn w3-teal w3-border' type='submit' name='sAcc' value='{$Id}'>Accept</button>  ";
            echo "  <button class='w3-btn w3-border w3-white type='submit' name='sRej' value='{$Id}'>Reject</button></td>";
            echo "</tr>";

            $i++;
        }

    if (isset($_POST['sAcc']) && intval($_POST['sAcc'])) {
        $user_id = (int) $_POST['sAcc'];
        $appUpdateQuery = "UPDATE Requests SET status = '1' WHERE id='".$user_id."'";
         mysqli_query($conn, $appUpdateQuery);

         // add  as an educator
         $query="select * from eduinformation"; // Fetch all the data 
         $result1 = mysqli_query($conn, $query);
         $queryAdd= "INSERT into eduinformation(id,eduNAME,course) values('$Id','$sName','$subject')";
         mysqli_query($conn,$queryAdd);

         //change the login type
         $updateUserType = "UPDATE login SET user_type = 'educator' WHERE college_id='".$user_id."'";
         mysqli_query($conn, $updateUserType);
    }
    if (isset($_POST['sRej']) && intval($_POST['sRej'])) {
        $user_id = (int) $_POST['sRej'];
        $appUpdateQuery = "UPDATE Requests SET status = '0' WHERE id='".$user_id."'";
        mysqli_query($conn, $appUpdateQuery);
        $querydelete= "delete from eduinformation where id ='".$Id."'";
         mysqli_query($conn,$querydelete);
         //change the login type
         $TypeStudent = "UPDATE login SET user_type = 'student' WHERE college_id='".$user_id."'";
         mysqli_query($conn, $TypeStudent);
    }
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
       
    </body>
</html>
