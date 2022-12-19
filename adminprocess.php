<?php
require_once("config.php");
if(isset($_POST['sublogin']))
{
    $login = $_POST['usn'];
    $password = $_POST['password'];
    $query = "select * from admin where( USN='$login')";
    $res = mysqli_query($trefle, $query);
    print_r($res);
    $numRows = mysqli_num_rows($res);
    if($numRows == 1)
    {
        $row = mysqli_fetch_assoc($res);
        if(password_verify($password,$row['password']))
        {
            $_SESSION["login_sess"] = "1";
            $_SESSION["login_email"] = $row['email'];
            echo"hello world";
            header("location:adminindex.html");

        }
        else
        {

            header("location:login.php?loginerror=" . $login);

        }
    }
    else{
        header("location:login.php?loginerror=" . $login);

    }

}
?>