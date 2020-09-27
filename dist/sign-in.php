
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
  <link href="assets/img/imos/favicon.ico" rel="shortcut icon" />
  <link rel="stylesheet" href="assets/css/estilo.css">
  <script src="assets/plugins/nprogress/nprogress.js"></script>
  <script src="js/jquery3.js"></script>
  <script src="assets/js/sweet.js"></script>

</head>

</head>
<?php
include('conn.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 //Username and Password sent from Form
 $username = mysqli_real_escape_string($conn, $_POST['user']);
 $password = mysqli_real_escape_string($conn, $_POST['pass']);
 $password = md5($password);

 $sql = "SELECT * FROM mosut_users WHERE mosut_users_usuario ='$username' AND mosut_users_pass = '$password'";
 $query = mysqli_query($conn, $sql);
 while ( $res=mysqli_fetch_assoc($query)){
 $usuario = $res['mosut_users_usuario'];
 //$contra  = $res['mosut_users_pass'];
 $sistema = $res['mosut_users_code'];
 } 
 
if($usuario == $username)
{

        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['sys'] = $sistema;
        $_SESSION['code'] = '0000';
        header('Location: main.php');

}
 else
 {

 echo "<script>swal('Error!', 'Usuario o Contraseña incorrectos', 'error');</script>";
 }

}

?>
  <body class="" id="body">
  <img src="assets/img/imos/logoImos.png" alt="MDN">
  <h4 style="color:#FFF; text-align:center;">SAUT</h4>
<div id="login">
 
	 <div class="container">
         <h3 style="color:#000;text-aling:center;">▲▲▲</h3>
         
           <div id="login-row" class="row justify-content-center align-items-center">
           
           <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">				  
            
                <div class="form-group">
                 <label for="username" style="color:white;margin-top:40px">Usuario:</label><br>
                 <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                 <label for="password"  style="color:white">Contraseña:</label><br>
                 <input type="password" name="pass" id="pass" class="form-control">
                </div>
                <input type="submit" name="submit"  class="btn btn-dark btn-margin" value="Ingresar">
              </form>
             </div>
            </div>
           </div>
         </div>
      </div>
     <?php include('footer.php') ?>
</body>
</html>
</body>
</html>