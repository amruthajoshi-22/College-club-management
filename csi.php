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
    <link rel="stylesheet" href="css/eachclub.css?v=<?php echo time(); ?>">
    <title>Ace</title>
</head>
<body>
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
            <?php 
              echo $row['post_name'].":"
            ?>
            </div>
            <div class="name">
            <?php 
              echo $row['stu_name']." ".$row['Sub1_name']." ".$row['Sub2_name']." ".$row['Sub3_name']
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