<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="prifilelog.css">

</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">


        <div class="login_form">
          <?php
          if (isset($_GET['loginerror'])) {
            $loginerror = $_GET['loginerror'];
          }
          if (!empty($loginerror)) {
            echo '<p class="errmsg">Invalid login, Try Again You stupid..</p>';
          } ?>


          <form action="login_process.php" method="POST">
            <div class="form-group">

              <label class="label_txt">Email Address or Username</label>
              <input type="text" name="login_var" value ="<?php if (!empty($loginerror)) 
               {echo $loginerror;}?>" class="form-control">
            </div>

            <div class="form-group">

              <label class="label_txt">Password</label>

              <input type="password" name="password" class="form-control">
            </div>
            </br>
            <button type="submit" name="sublogin" class="btn btn-primary form_btn">Login</button>



          </form>
          
          <br>
          <p> Don't have an account ? <a href="signup.php">Sign up </a></p>
          <p> Admin Login?<a href="adminlogin.php">Admin login</a></p>
        </div>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>