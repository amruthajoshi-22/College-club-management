<?php
session_start();
$email = $_SESSION["login_email"];

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
    <link rel="stylesheet" href="css/eachclub.css?v=<?php echo time(); ?>">
    <title>Ace</title>
    <style>
    .joincontainer{
    height:30vh;
    width:70%;
    margin: auto;
    display:flex;
    justify-content: space-evenly;
    margin-top:5em;
    border-radius: 15px;
    background-color: cornflowerblue;
    padding-top: 7em;
    margin-top: 5em;
}

.joinnow{

    width:14em;
    color: black;
    font-size:45px;
}

.joinbutton{
    width:10em;
    height:4em;
    border-radius: 10px;
}
</style>
</head>
<body>

    <h1 style="text-align:center; font-size:50px; ">
        Finite Loop club;
    </h1>
  <div class="about">
    <div class="clubimg"><img src="images/flc.png" alt="" srcset="" style=" width:15rem; height:15rem"></div>
  <div class="about_dept">
    <h2>About Us</h2>
    
    <p style="width:40rem; font-size:23px;">Finite Loop is a Coding Club, which aims to give a good perspective of development, and encourages students to realize their ideas. We encourage students to participate in competitive programming and thus, inspire the next.</p>
    </div>
    </div>

    <div class="clubcore">
      <h1 style="margin:1rem 0 1rem 0; text-align:center">Club Core Committee</h1>
        
        <?php 
        $query="SELECT post_name,stu_name,Sub1_name,Sub2_name,Sub3_name  FROM club_core WHERE club_id='flc_03' ORDER BY S_no ";
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
            </div>
            <div class="name">
            <span style="font-weight:bolder">
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