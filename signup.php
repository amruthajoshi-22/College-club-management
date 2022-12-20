<!doctype html>
<?php require_once("config.php");?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="prifilelog.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
      if(isset($_POST['signup']))
      {
        extract($_POST);
        if(strlen($fname)<3)  //fname min
        {
          $error[] = 'enter 3 character atleast in first name';
        }
        if(strlen($fname)>20)  //fname max
        {
          $error[] = 'first name : max length 20 characters';
        }
        if (!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/",$fname))
        {
            $error[]='invalid first name, do not use sepecial characters';
        }

        if(strlen($lname)<3) //lname min
        {
          $error[] = 'enter 3 character atleast in last name';
        }
        if(strlen($lname)>20)  //lname max
        {
          $error[] = 'last name : max length 20 characters';
        }
        if (!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/",$lname))
        {
            $error[]='invalid first name, do not use sepecial characters';
        }


        if(strlen($username)<3)  //username min
        {
          $error[] = 'enter 3 character atleast in user name';
        }
        if(strlen($username)>50)    //username max
        {
          $error[] = 'user name : max length 50 characters';
        }
        if (!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/",$username))
        {
            $error[]='invalid user name, Enter lowercase user name with no 
            numerical at start  eg- newusername or mysuder123';
        }
        if(strlen($email)>50)    //email max
        {
          $error[] = 'email : max length 50 characters';
        }
        if($passwordConfirm == '') //confirm passcode
        {
          $error[] = 'please confirm psscode';
        } 
        if($password != $passwordConfirm)  
        {
          $error[] = 'passcode does not match';
        }
        if(strlen($password)<5)    //min psscode
        {
          $error[] = 'password is atleast 6 chars long';
        }
        if(strlen($password)>20)    //max psscode
        {
          $error[] = 'password : max length 20 allowed';
        }

        $sql = " select * from users where (USN ='$username' or email='$email')";
        $res = mysqli_query($trefle, $sql);
        if(mysqli_num_rows($res)>0)
        {
          $row = mysqli_fetch_assoc($res);
          if($username==$row['USN'])
          {
            $error[] = 'username already exists';
          }
          if($email==$row['email'])
          {
            $error[] ='email already exists';
          }
        }
        if(!isset($error))
        {
          $date = date('Y-m-d');
          $options = array("cost" => 4);
          $password = password_hash($password, PASSWORD_BCRYPT, $options);
          $result = mysqli_query($trefle, "INSERT into users values('','$fname','$lname'
          ,'$username','$email','$password','$date')");

          if($result){
            $done = 2;
          }
          else{
            $error[] = 'failed : somthing went wrong';
          }
        }
      }
      ?>

      <div class="col-sm-4">
        <?php
        if(isset($error))
        {
          foreach($error as $error)
          {
            echo '<p class = "errmsg" > &#x26A0;' . $error . '</p>';
          }
        }
        ?>
      </div>
      <div class="col-sm-4">

          <?php if(isset($done))
          { ?>
          <div class="successmsg"><span style="font-size: 100px;">&#9989;</span> 
          <br>you have registered successfully .<br> <a href="login.php" style="color:#fff;">login here ...</a></div>
          <?php } else { ?>
        <div class="signup_form">

          <form action="" method="POST">
            <div class="form-group">
              <label class="label_txt">First Name</label>
              <input type="text" class="form-control" name="fname" value="<?php
              if (isset($error)) 
              {echo '$fname';} ?>" required="">
            </div>

            <div class="form-group">
              <label class="label_txt">Last Name</label>
              <input type="text" class="form-control" name="lname" value="<?php
              if (isset($error)) 
              {echo '$lname';} ?>" required="">
            </div>

            <div class="form-group">
              <label class="label_txt">Username</label>
              <input type="text" class="form-control" name="username" value="<?php
              if (isset($error)) 
              {echo '$username';} ?>" required="">
            </div>

            <div class="form-group">
              <label class="label_txt">Email</label>
              <input type="email" class="form-control" name="email" value="<?php
              if (isset($error)) 
              {echo ' $email';} ?>" required>
            </div>

            <div class="form-group">
              <label class="label_txt">Password</label>
              <input type="password" class="form-control" name="password" required="">
            </div>

            <div class="form-group">
              <label class="label_txt">Confirm Password</label>
              <input type="password" class="form-control" name="passwordConfirm" required="">
            </div>


            </br>
            <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">Signup</button>

            </br>
            <p> have an account ? <a href="login.php">login</a></p>

            <?php } ?>
          </form>


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