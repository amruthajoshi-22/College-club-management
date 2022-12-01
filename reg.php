<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
echo "hello world";
        if(isset($_POST['name'])){
            $server="localhost";
            $username="root";
            $password="";
            $con=mysqli_connect($server,$username,$password);
            if(!$con){
                die("connection to this database failed due to".mysqli_connect_error());
            }
            echo "Success connecting to the db";
        
         $name=$_POST['name'];
         $usn=$_POST['usn'];
         $branch=$_POST['branch'];
         $sem=$_POST['sem'];
         $mail=$_POST['mail'];
         $phone=$_POST['phone'];
         $reason=$_POST['desc'];
        $sql="INSERT INTO `TREFLE`.`FLC` ( `name`, `USN`, `branch`, `sem`, `mail`, `phone`, `reason`) VALUES ( '$name', '$usn', '$branch', '$sem', '$mail', '$phone', '$reason');";
        echo "$sql";

        if($con->query($sql)==true){
            echo "<br>Successfully inserted";
        }

        else{
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
        }
        ?>
    </body>
</html>
