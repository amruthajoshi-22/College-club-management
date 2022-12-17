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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/eachclub.css?v=<?php echo time(); ?>">
    <title>Ace</title>
</head>
<body>

     <button type="button" class="btn btn-light back" onclick="back()">Back</button>
    <h1 style="text-align:center; font-size:50px; ">
        Computer Society Of India
    </h1>
  <div class="about">
    <div class="clubimg"><img src="images/csi.png" alt="" srcset="" style=" width:15rem; height:15rem"></div>
  <div class="about_dept">
    <h2>About Us</h2>
    
    <p style="width:40rem; font-size:23px;">The Computer Society of India(CSI) Student Branch, started in the institute in the year 2007, aims at imparting technical knowledge and ethical responsibilities in the students through all its activities. It encourages and motivates students to participate, organize and volunteer in various workshops, technical training, competitions and motivational events to instill in them a sense of responsibility, confidence and determination. It also aims at overall personality development by providing hands-on workshops to educate students in the latest trends. The theoretical knowledge obtained in the classes is used for the implementation, hence providing the practical knowledge to all. Technical talks are arranged to keep students updated about the recent technologies. Every possible attempt is made to equip students with the best of technical knowledge to mould them into a perfect engineer.</p>
    </div>
    </div>

    <div class="clubcore">
      <h1 style="margin:1rem 0 1rem 0; text-align:center">Club Core Committee</h1>
        
        <?php 
        $query="SELECT post_name,stu_name,Sub1_name,Sub2_name,Sub3_name  FROM club_core WHERE club_id='csi-02' ORDER BY S_no ";
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

      <script>
        function back()
        {
        window.location.href="clubs.html";
        }

        </script>
</body>
</html>