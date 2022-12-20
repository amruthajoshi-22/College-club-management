<?php
require("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/club.css">
    <link rel="stylesheet" href="css/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <style>
     .posterimg{
      height:20rem;
      width:35rem;
     }
     .desc{
      width:30rem;
      font-size:20px;
      color:white;
     }
     .row1{
      display:flex;
      justify-content:space-evenly;
      margin:4rem 2rem 4rem 2rem;
     }

     .joinbutton{
    width:10em;
    height:2.5em;
    border-radius: 10px;
}
    </style>
    <title>clubs</title>
</head>
<body>
    <?php
    require('nav.html');
    ?>
      <section>
        
        <?php
        $q1="Select * from events";
        $result = mysqli_query($con,$q1);

        while($row = mysqli_fetch_array($result))
        {
       ?>
       
        <?php
        $temp=$row['eposter'];
        
        ?>
        <div class="row1">
        <img class="posterimg" src="<?php echo $temp ?>" alt="img" srcset="">
        <div class=desc>
          
          <p>Date:&ensp;<?php echo $row['edate'];?></p>
          <p>Time:&ensp;<?php echo $row['etime'];?></p>
          <p>Organizer:&ensp;<?php echo $row['eorganizer'];?></p>
          <p>Venue:&ensp;<?php echo $row['evenue'];?></p>
          <p><?php echo $row['edescription'] ?></p>
          <button class="joinbutton" onclick="eventjoin()">Join Now</button>
        
          </div>
        
       
       </div>
       <?php
        }

        ?>  
    </section>

    <script>
      function eventjoin()
      {
        window.location.href ="regevent.html";
      }
    </script>
</body>
</html>