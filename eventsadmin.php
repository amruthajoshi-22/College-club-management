<?php
require('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trefle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=El+Messiri:wght@700&family=Xanh+Mono&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
 <style>
    
    .eventshead{
        font-size:25px;
        font-weight:bold;
    }

    .eventslist{
        background-image:linear-gradient(to right,rgb(70 19 71),rgb(134 76 132));
    }

    .eachrow{
        border-radius:25px;
        font-size:20px;
        height:8vh;
        width:80vw;
        display:flex;
        justify-content:space-evenly;
        color:white;
        margin:2rem auto 2rem auto;
        
    }
    .eachentry{
        width:11vw;
    }
    .studetail{
        height:5vh;
        width:60vw;
        margin:3rem auto 0 auto; 
        display:flex;
        justify-content:space-evenly;
        color:white;
        /* display:none; */
    }

    .eventbutton{
        display:flex;
        justify-content:center;
        margin-top:2rem;
    }
    
    </style>
</head>
<body>
<?php
require('navadmin.html');
?>
<div class="regevents">
    <h1 style="color:white; margin:4rem auto 4rem auto; width:20rem;">Events List</h1>

        <div class="eachrow eventshead">
            <p class="eachentry" style="width:6vw;">S.no</p>
            <p class="eachentry">Event Name</p>
            <p class="eachentry">Date</p>
            <p class="eachentry">Time</p>
            <p class="eachentry">Venue</p>
            <p class="eachentry">Organizer</p>
        
    </div>   
<?php
   $k=1;
    $q1="Select * from events";
        $result = mysqli_query($con,$q1);

        while($row = mysqli_fetch_array($result))
        {
            ?>
            <div class="eachrow eventslist">
                <p class="eachentry" style="width:6vw;"> <?php echo $k++ ?></p>
                <p class="eachentry"> <?php echo $row['ename'] ?></p>
                <p class="eachentry"> <?php echo $row['edate'] ?></p>
                <p class="eachentry"> <?php echo $row['etime'] ?></p>
                <p class="eachentry"> <?php echo $row['evenue'] ?></p>
                <p class="eachentry"> <?php echo $row['eorganizer'] ?></p>
        </div>
        <?php
        }
        ?>
    </table>

</div>
<div class="addevents">
<button type="button" class="btn btn-primary btn-lg" style="margin:5rem 0 5rem 45vw;" onclick="addevent()";>Add Events</button>
</div>

<div class="registerstu">
      <h1 style="color:white; margin:4rem auto 4rem auto; width:35rem;">Registered students for events</h1>
<?php
      $q2="Select eventid, ename from events";
      $result1 = mysqli_query($con,$q1);
      while($row = mysqli_fetch_array($result1))
      {
          $temp1=$row['eventid'];
          $temp2=$row['ename'];
          ?>
          <div class="eventbutton">
          <button type="button" class="btn btn-primary eventbutton" onclick="showstudents(this);"><?php echo $temp2 ?></button>
         </div>
          <?php
         $q3="Select * from $temp1";
         $result2 = mysqli_query($con,$q3);
         ?>
         
      <?php
      $i=1;
      while($row1 = mysqli_fetch_array($result2))
      {
         ?>
         <div class="studetail"> 
            <p><?php echo $i++?></p>
            <p><?php echo $row1['name']?></p>
            <p><?php echo $row1['USN']?></p>
            <p><?php echo $row1['phone']?></p>
            
      </div>  
     <?php
      }
      }


    ?>
</div>
<script>
    function showstudents(){
        var y=document.getElementsByClassName('studetail');
        alert(y);
    
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
    }
    function addevent(){
        window.location.href="eventadd.html";
    }
</script>
</body>
</html>