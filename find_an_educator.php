<!DOCTYPE html>
<html lang="en">
<head>
    <title>Find an Educator</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <link href="style.css" rel="stylesheet"> -->
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
    <?php 
    //  include "login_db.php";
    ?>
    <?php   
    // include 'db_con.php';
    // $query="select * from eduschedule"; // Fetch all the data 
    // $result1 = mysqli_query($conn, $query);
      
    //     while ($result = mysqli_fetch_assoc($result1)) {  
    //          echo "  
    //       <section id='educator ' class='display-m '>
    //       <div class='card-group mt-5'>
    //          <div class='card mx-3 mb-3 mt-5 box-shadow' style='max-width: 25rem;border-color: #FF3CAC;'>
    //          <div class='card-header text-center text-white px-5 py-3'  style=' background-color: #FF3CAC; 
    //          background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #0278ff 100%);'><h4>".$edu=$result['edu_name']."</h4></div>
    //          <div class='card-body text-center'>
    //            <p class='card-text'><b>Course:</b> ".$course=$result['course']."</p>
    //            <p ><b>Date: </b>".$date=$result['date']."</p>
    //            <p ><b>Time: </b>".$time=$result['time']."</p>
    //            <div class='card-Fora'> <a href='db_book.php?stuid=".$_SESSION['college_id']."&edu_name=".$result['edu_name']."&course=".$result['course']."&date=".$result['date']."&time=".$result['time']."' class=' book_link btn '> Book New Session</a></div>
    //          </div>
    //        </div>
    //          </div>
    //          </div>
    //         ";  
    //       }
          ?>
         
         
            <!-- </section> -->
            <?php 
            include "login_db.php";
            ?>
          <section id='educator ' class=' container '>
            <div class='row'>
          <?php
            include 'db_con.php';
            $query="select * from eduschedule"; // Fetch all data
            $result1=mysqli_query($conn,$query);
            ?>
            <?php if (mysqli_num_rows($result1) > 0): ?>
            <?php while($result=mysqli_fetch_assoc($result1)): ?>
            <div class='card-group mt-5 col-4'>
             <div class='card mx-3 mb-3 mt-5 box-shadow' style='border-color: #FF3CAC;'>
             <div class='card-header text-center text-white px-5 py-3'  style=' background-color: #FF3CAC; 
             background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #0278ff 100%);'><h4><?php echo $result['edu_name']?></h4></div>
             <div class='card-body text-center'>
               <p class='card-text'><b>Course:  </b><?php echo $result['course']?></p>
               <p ><b>Date: </b><?php echo $result['date'] ?></p>
               <p ><b>Time: </b><?php echo $result['time'] ?></p>
               <?php echo "<div class='card-Fora'> <a href='db_book.php?stuid=".$_SESSION['college_id']."&edu_name=".$result['edu_name']."&course=".$result['course']."&date=".$result['date']."&time=".$result['time']."' class=' book_link btn '> Book New Session</a></div>"
                ?>  
             
             </div>
           </div>
             </div>
             <?php endwhile; ?>
             <?php else: ?>
                  <h3 colspan="4" rowspan="1" headers="" class="text-center">No Educator is Found</h3>
            <?php endif; ?>
            <?php mysqli_free_result($result1); ?>
             </div>
          
         
         
            </section>
  <!---------------------------------------Footer-------------------------------------------->
  
  <?php include("footer.php");?>
  <!------------------------------------------End footer---------------------------------->

</body>
<html>