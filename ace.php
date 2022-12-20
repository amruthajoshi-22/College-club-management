<?php
$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"trefle");
session_start();
$username=$_SESSION["login_username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/eachclub.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/navclubuser.css">
    <title>Ace</title>
</head>
<body>
<?php
$q1="SELECT * from users where username='$username'";
$q2="SELECT * from admin where USN='$username' ";
$result1 = mysqli_query($con,$q1);
$result2=mysqli_query($con,$q2);
$rowcountuser=mysqli_num_rows($result1);
$rowcountadmin=mysqli_num_rows($result2);
if($rowcountuser!=0){
include('navclubuser.html');
}
elseif($rowcountadmin!=0){
    include('navclubadmin.html');
}
?>
    <h1 style="text-align:center; font-size:50px; ">
        Association Of Computer Engineers
    </h1>
  <div class="about">
    <div class="clubimg"><img src="images/ace.png" alt="" srcset="" style=" width:15rem; height:15rem"></div>
  <div class="about_dept">
    <h2>About Us</h2>
    
    <p style="width:30rem; font-size:23px;">
  Ace Stands for Association of Computer Engineers.It is a Branch association club of CSE Department.HOD of CSE is Dr Jyothi Shetty.Faculty Coordinator for the year 2022-2023 is Dr Pradeep Kanchan, MS Keerthana B,Mr Ashwin Shenoy.</p>
    </div>
    </div>

    <div class="clubcore">
      <h1 style="margin:1rem 0 1rem 0; text-align:center">Club Core Committee</h1>
        
        <?php 
        $query="SELECT post_name,stu_name,Sub1_name,Sub2_name,Sub3_name  FROM club_core WHERE club_id='ace_01' ORDER BY S_no";
        $result = mysqli_query($con,$query);
        $total=mysqli_num_rows($result);
        
    
        ?>
        <div class="eachcore">
         <?php
         while($row = mysqli_fetch_array($result))
         {
        ?> 
            <div class="eachpost">
            <div class="post">
              <span style="font-weight:bolder">
            <?php 
              echo $row['post_name'].":"
            ?>
            </span>
            </div>
            <div class="name">
            <span style="font-weight:bold">
            <?php 
               echo $row['stu_name'];
               ?>
              </span>
               <?php
              echo "<br>";
              echo $row['Sub1_name'];
              echo "<br>";
              echo $row['Sub2_name'];
            ?>
            </div>
           
            </div>
         
        <?php
         }
         ?>
        </div>
        </div>
</body>
</html>