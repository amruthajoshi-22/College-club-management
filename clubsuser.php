<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/club.css">
    
    
    <title>clubs</title>
</head>
<body>
    <?php
    require('nav.html')
    ?>
     <div class="container-fluid club-contain">
      
          <div class="club">
            <img   class="clubimg"src="images/csi.png" alt="csi" srcset="" onclick="window.location.href ='csi.php'">
            
          </div>
          <div class="club">
            <img   class="clubimg"src="images/ace.png" alt="ace" srcset="" onclick="window.location.href ='ace.php'">
          </div>
          <div class="club">
            <input type="image"  class="clubimg"src="images/flc.png" alt="flc" srcset="" onclick="window.location.href ='flc.php'">
          </div>
          <div class="club">
            <input type="image"  class="clubimg"src="images/stereo.png" alt="stereo" srcset="" onclick="window.location.href ='stereo.php'">
          </div>
          <div class="club">
            <input type="image"  class="clubimg"src="images/kalanjali.png" alt="kalanjali" srcset="" onclick="window.location.href ='kalanjali.php'">
          </div>
          
          <div class="club">
            <input type="image"  class="clubimg"src="images/rachana.png" alt="rachna" srcset="" onclick="window.location.href ='rachana.php'">
          </div>
          <!-- <div class="club">
            <input type="image"  class="clubimg"src="images/autocraft.png" alt="" srcset="">
          </div>
          <div class="club">
            <input type="image"  class="clubimg"src="images/Aura club.png" alt="" srcset="">
          </div> -->
        
     </div>

</body>
</html>