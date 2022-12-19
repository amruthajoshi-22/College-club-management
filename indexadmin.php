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
</head>
<body>
    <?php
    require('navadmin.html');
    ?>
      <!-- <p class="upcoming">Upcoming events</p> -->
      <div id="carouselExampleIndicators1" class="carousel slide upcoming-event" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner up-car">
          <div class="carousel-item active first-car">
            
            <button type="button" class="btn register1">Register now</button>
          </div>
          <div class="carousel-item second-car">
          
            <button type="button" class="btn btn-primary register2">Register now</button>
          </div>
          <!-- <div class="carousel-item">
            
          </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!-- why join clubs -->
<div class="container-fluid block">
  <h1 class="headings">Why join clubs </h1>
<div class="joinclubs">
  <div class="reason">
    <p class="rea-text">Improve your Interpersonal skills</p>
  </div>
  <div class="reason">
    <p class="rea-text">Build your social support network</p>
  </div>
  <div class="reason">
    <p class="rea-text " style="width:15rem">Decrease your stress level</p>
  </div>
</div>
</div>

<div class="container-fluid block">
  <h1 class="headings">What you'll get </h1>
  <div class="feature-block">
   <div class="purple">
    <img src="images/collage-clubs.png" class="featureimage" alt="" srcset="">
   </div>
   <div class="featurecontent">
    <div class="feature mt">
      <p  class="fea-head">Joining club</p>
      <p style="font-size:1.5em;">You can join any of the college clubs through this portal </p>
    </div>
    <div class="feature" >
      <p class="fea-head">Event registration</p>
      <p style="font-size:1.5em;">Registration for any of the events held in the college can be done through this portal</p>
    </div>
    <div class="feature">
      <p class="fea-head">Hosting Events</p>
      <p style="font-size:1.5em;">Core memebers of clubs can host the events in this site at any time</p>
    </div>
   </div>
  </div>

</div>

<div class="container-fluid block">
  <h1 class="headings">Glimpses of our fest</h1>
  <div id="carouselExampleSlidesOnly2" class="carousel slide incridea" data-bs-ride="carousel">
    <div class="carousel-inner incridea-image" >
      <div class="carousel-item active inc-first">
        
         
      
      </div>
      <div class="carousel-item inc-second">
        <!-- <img src="..." class="d-block w-100" alt="..."> -->
      </div>
       <div class="carousel-item inc-third">
         <!-- <img src="..." class="d-block w-100" alt="..."> --> -->
      </div> 
    </div>
  </div>

</div>

<div class="container-fluid block" >
  <h1 class="headings">College administration</h1>
  <div class="administration">
    <div class="heads">
      <img src="images/princi.png" class="image-admin" alt="" srcset="">
      <div class="designation">
      <p style="margin-bottom:0;">Prof.(Dr) Niranjan N. Chiplunkar </p>
        <p>Principal</p>
      </div>
    </div>

    <div class="heads">
    
      <img src="images/vice-principal.jpg" class="image-admin" alt="" srcset="">
      <div class="designation">
      <p style="margin-bottom:0;">Dr.I.R.Mithanthaya</p>
      <p>Vice Principal & Dean(Academics)</p>
    </div>
    </div>

   <div class="heads">
    
    <img src="images/shrinivasRao.jpg" class="image-admin" alt="" srcset="">
    <div class="designation">
      <p style="margin-bottom:0;">Dr.Shrinivas Rao B.R. </p>
        <p>Vice Principal & Controaller of Examinations</p>
      </div>  
    </div>
    <div class="heads">
      <img src="images/sudesh.jpg" class="image-admin" alt="" srcset="">
      <div class="designation">
      <p style="margin-bottom:0;">Dr.Sudesh Bekal</p>
        <p>Dean R&D</p>
      </div>
    </div>
    
  </div>

</div>

<footer class="block">
  <p class="foot-head" style="margin-top: 2em;">
    <img src="images/logo.png" alt="logo" srcset=" " style="height:3em; width:3em;" >
    <span style="font-size:30px; color: aliceblue; font-weight: bold;font-family: 'Lucida Sans', sans-serif;">TREFLE</span>
  </p>

  <div class="footcontent">
       <span style="font-size:3em; color:blueviolet">Connect</span>
       <span>123-456-7890</span>
       <span style="width: 19em;">NMAM Institute of Technology,<span>

       <span>Nitte,Karkala Taluk,Udupi district</span>
       <span>treflenitte@gmail.com</span>

       <div class="smedia">
        <i class="fa-brands fa-square-facebook"></i>
        <i class="fa-brands fa-square-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-square-twitter"></i>
       </div>
  </div>
</footer>


</body>
</html>