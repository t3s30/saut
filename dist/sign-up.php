<?php
include('conn.php');//DB Connection
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 // Username and Password sent from Form
 $username = mysqli_real_escape_string($con, $_POST['user']);
 $password = mysqli_real_escape_string($con, $_POST['pass']);
 $password = md5($password); //Password Encrypted
 $sql = "INSERT INTO mosut_users(mosut_users_usuario,mosut_users_pass) values('$username', '$password')";
 $result = mysqli_query($con, $sql);
 if(!$result){
 die ("Error on the Connection" . $con->error);
 }else{
    header('Location: sign-in.php');  

 }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title></title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="" id="body">
          <div class="container d-flex flex-column justify-content-between vh-100">
          <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="app-brand">
                    <a href="/index.html">
                    <img src="assets/img/imos/logoImos.png" alt="" width="33" height="33">  
                    <g fill="none" fill-rule="evenodd">
                          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                      </svg>
                      <span class="brand-name">MOSUT</span>
                    </a>
                  </div>
                </div>
                <div class="card-body p-5">
                  <h4 class="text-dark mb-5">Registro</h4>
                  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="row">
                     <!--  <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" id="name" aria-describedby="nameHelp" placeholder="Name">
                      </div> -->
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" id="user" name="user" aria-describedby="emailHelp" placeholder="Usuario">
                      </div>
                      <div class="form-group col-md-12 ">
                        <input type="password" class="form-control input-lg" id="pass" name="name" placeholder="Contraseña">
                      </div>
                     <!--  <div class="form-group col-md-12 ">
                        <input type="password" class="form-control input-lg" id="cpassword" placeholder="Confirm Password">
                      </div> -->
                      <div class="col-md-12">
                       <!--  <div class="d-inline-block mr-3">
                          <label class="control control-checkbox">
                            <input type="checkbox" />
                            <div class="control-indicator"></div>
                            I Agree the terms and conditions
                          </label>

                        </div> -->
                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Registrar</button>
                        <!-- <p>Already have an account?
                          <a class="text-blue" href="sign-in.html">Sign in</a>
                        </p> -->
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
          <div class="copyright pl-0">
            <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
              <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
            </p>
          </div>
        </div>

</body>
</html>