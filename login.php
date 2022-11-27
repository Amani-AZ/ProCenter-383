<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style 1.css">
    <title>Login</title>
    <style>
    .btn-primary{
    background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #0277ff 100%);
    }
    i{
      color: #0277ff
    }
    .bb{
      border: 2px  solid #0277ff;
    }
    </style>
</head>
<body class="bg-light">
<?php 
include "login_db.php";
?>
  <header>
    <a href="/login.php"><img src="Pictures/Logo-clear.png" alt="ProCenter Logo" width="100" height="100"></a>
  </header>
    <section class="vh-100 mt-0">
        <div class="container h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6 ">
              <img src="Pictures/login_procenter.svg"
                class="img-fluid" alt="ProCenter image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 shadow p-5 mb-5 bg-white rounded rightside">
              <h2 class="mb-5 text-center">Login to continue</h2>
              <form action="login_db.php" method="post">
                
                <!-- id input -->
                <div class="form-outline mb-4">
                    <div class="row">
                       <div class="col-1 mt-2"> <i class="fa fa-user w3-xlarge " ></i></div>
                       <input type="text" name="college_id" class="form-control form-control-lg col" placeholder="Enter id" /> 
                    </div>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <div class="row">
                      <div class="col-1 mt-2"> <i class="w3-xlarge fa fa-lock "></i></div>
                        <input type="password"  name="password" class="form-control form-control-lg col" placeholder="Enter Password" />
                    </div>
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <a href="#!">Forgot password?</a>
                </div>
                <div class="d-grid">
                    <button name="sub" type="submit" class=" btn btn-primary btn-lg btn-block border-0" >Log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>