<!DOCTYPE html>
<?php
require_once("config.php");

if (!isset($_SESSION["login_sess"])) {
    header("location:login.php");
}
$email = $_SESSION["login_email"];
echo "$email";
$findresult = mysqli_query($trefle, "SELECT * from users where email='$email'");
if ($res = mysqli_fetch_array($findresult)) {
    $username = $res['USN'];
    $fname = $res['fname'];
     $lname = $res['lname'];
    $email = $res['email'];
}

?>
<html>

<head>
    <title>trefle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="prifilelog.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

                <div class="account_form">
                    <p>
                        <a href="logout.php"><span style=" color:red; float: right;">Logout
                            </span></a>
                    </p>
                    <p>
                        Welcome!  <?php echo $username; ?>
                    </p>

                    <table class="table">
                            <tr>
                                <th>First name</th>
                                <td><?php echo $fname; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Last name</th>
                                <td><?php echo $lname; ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?php echo $username; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $email; ?></td>
                            </tr>
                    </table>

                </div>
                <div class="col-sm-3">

                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>