
<?php
$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"trefle");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nontech.css">
</head>
<body>
<div class="head">

<div class="heading" >
    <h1 style="text-align:center; color:rgb(50, 72, 99); font-size:4em;">Stereo Club<br>Let the music take you away.</h1>>
</div>
<p style="text-align:center; color:rgb(138, 144, 194); font-size:4em;"> Club Core Members</p>

<?php 
        $query="SELECT post,stu_name,sub1  FROM club_nontech WHERE club_id='str_05'";
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
        <p> Music and instrumental club of nitte <bold>Stereo</bold> is one of the most joined club of our college.
        </p>
             <p>Being a part of this club gives you an opportunity to perform in various cultural events taking place in our collge.
                Once in month we conduct jamming session where you can showcase your talent and have fun.
             </p> </div>
    <div class="joincontainer">
        <div class=joinnow>Want to join this Club to Unlock your creativity</div>
        <button class="joinbutton" onclick="formjoin()">Join Now</button>
    </div>
</section>
<script>
      function formjoin()
      {
        window.location.href ="reg1.html";
      }
    </script>
</body>
</html>