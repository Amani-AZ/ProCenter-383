<?php include 'files_logic.php';?>
<html>
  <head>
    <title>Educator Materials</title>

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
  <?php 
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
    <div class="schedule container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title text-white p-2">Materials</h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table text-white" style="padding:0;">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Filename</th>
                                    <th>size (in mb)</th>
                                    <th>Downloads</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if (mysqli_num_rows($result) > 0):  
                            foreach ($files as $file): ?>
                                <tr>
                                <td><?php echo $file['stu_id']; ?></td>
                                <td><?php echo $file['name']; ?></td>
                                <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                                <td><?php echo $file['downloads']; ?></td>
                                <td><a href="student_materials.php?file_id=<?php echo $file['no'] ?>">Download</a></td>
                                </tr>
                                <?php endforeach;?>
                                <?php else: ?>
                                <tr>
                                <td colspan="5" rowspan="1" headers="" class="text-center text-white">No materials is Found</td>
                                </tr>
                            <?php endif; ?>
                            <?php mysqli_free_result($result); ?>
<!-- ---------------------------------------------- End of Download ------------------------------------------------------ -->
<!-- ---------------------------------------------- Upload ------------------------------------------------------ -->
                            </tbody>
                        </table>
                    </div>
<!-- ---------------------------------------------- End of Upload ------------------------------------------------------ -->
                <div class="container panel-body table-responsive ">
                    <form action="#" method="post" enctype="multipart/form-data">
                    <!-- <div class="row my-3"> -->
                    <div class="row mt-4">
                    <div class=" d-grid gap-2 col-6 mx-auto">
                        <label class="form-label text-white">Upload File</label>
                        <input type="file" name="myfile[]" class="text-white" id="file" multiple required>
                            <?php
                                $query="SELECT * FROM `login` WHERE user_type='student'";
                                $result1 = mysqli_query($conn, $query);
                            ?>
                    </div>
                    </div>
                    <div class="row mt-4">
                    <div class=" d-grid gap-2 col-6 mx-auto">
                    <!-- <div class=" w-50 h-50 align-items-center"> -->
                        <label  class="form-label text-white"  name="student"> Student ID</label>
                        <select name="student" class="form-select" required>
                        <option value="" disabled selected hidden>Select Student</option>
                            <?php while($row2 = mysqli_fetch_array($result1)):;?>
                            <option  value="<?php echo $row2[0];?>"><?php echo $row2[0];?></option>
                            <?php endwhile;?>
                        </select>
                    </div>
                    </div>
                    <div class="row mt-4">
                    <div class=" d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary btn-lg rounded-5 btn-block" type="submit" name="save"> Upload Material</button>    
                    </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>
</div>


                
            
  <?php include("footer.php");?>
    
    </body>
</html>
