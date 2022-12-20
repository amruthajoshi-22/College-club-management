<?php
require('database.php');
session_start();
$username=$_SESSION["login_username"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="css/nontech.css">
    <link rel="stylesheet" href="css/navclubuser.css">

</head>
<style>
    .studetail{
        width:60vw;
        margin:1rem auto 1rem auto;
        background-color:rgb(121, 160, 193);
        display:flex;
        justify-content:space-evenly;
        border-radius:10px;
    }

    .memberhead{
        font-size:3em;
        color: rgb(121, 160, 193);
        margin:3rem auto 3rem auto;
        width:fit-content;
    }

    .nav-item{
        color:black;
    }
    </style>
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
<div class="head">

<div class="heading" >
    <h1 style="text-align:center; color:rgb(50, 72, 99); font-size:4em;">Kalanjali<br>Let the music take you away.</h1>>
</div>
<p style="text-align:center; color:rgb(138, 144, 194); font-size:4em;"> Club Core Members</p>

<?php 
        $query="SELECT post,stu_name,sub1  FROM club_nontech WHERE club_id='kal_04'";
        $result = mysqli_query($con,$query);
        // $total=mysqli_num_rows($result);

        ?>
        <div class="row">
        <?php
        while($row = mysqli_fetch_array($result)){

         ?>

<div class="post">
    <div class="post-name"> <?php echo $row['post'] ?></div>  
 <img src="https://cdn2.iconfinder.com/data/icons/flat-style-svg-icons-part-1/512/user_man_male_profile_account-512.png" alt="cahirmen" srcset=""> 
 <div class="post-name"><?php echo $row['stu_name'] ?></div> 
 </div>
 <?php 
        }
 ?>

</div>
</div>
<section>
    <div class="about-club">
        <h1 style="text-align: center; font-size:3em;">About Us</h1>
        <p> Dance  club of nitte <bold>Kalanjali</bold> is one of very popular club among students.
        </p>
             <p>Club has perticipated in various activities in college . 
              We have won various prizes for our college. There are three crew in Kalanjali 
              that includes all core members <br>TIPTOE<br>RFC<br>MUDRA
             </p> </div>
    

    <?php
       $q1="SELECT * from users where username='$username'";
       $q2="SELECT * from admin where USN='$username' ";
       $result1 = mysqli_query($con,$q1);
       $result2=mysqli_query($con,$q2);
       $rowcountuser=mysqli_num_rows($result1);
       $rowcountadmin=mysqli_num_rows($result2);
       if($rowcountuser!=0){
        ?>
        <div class="joincontainer">
        <div class=joinnow>Want join this Club to Unlock your creativity</div>
        <button class="joinbutton" onclick="formjoin()">Join Now</button>
    </div>

    
    <?php
       }
    elseif($rowcountadmin!=0){
        ?>
        <h1 class="memberhead"> Club Members</h1>
        <?php
      $q2="Select * from kalanjalimembers";
      $result1 = mysqli_query($con,$q2);
      while($row = mysqli_fetch_array($result1))
      {
      $i=1;
      ?>
         <div class="studetail"> 
            <p><?php echo $i++?></p>
            <p><?php echo $row['name']?></p>
            <p><?php echo $row['USN']?></p>
            <p><?php echo $row['phone']?></p>
            
      </div>  
     <?php
      }
      }


    ?>
    
</section>
<script>
      function formjoin()
      {
        window.location.href ="regclub.html";
      }
    </script>
</body>
</html>