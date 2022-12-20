
<?php  
  $con=mysqli_connect("localhost","root","");
  if(!$con)
  {
      die("could not connect ".mysqli_connect_error());
  }
 
        mysqli_select_db($con,"trefle");

         $cname=$_POST['cname'];
         $name=$_POST['uname'];
         $usn=$_POST['usn'];
         $branch=$_POST['branch'];
         $sem=$_POST['sem'];
         $mail=$_POST['mail'];
         $phone=$_POST['phone'];
         $reason=$_POST['reason'];
         switch($cname)
         {
            case "Kalanjali":
            case "kalanjali": $table="kalanjalimembers";
                              $club="kalanjali.php";
                              break;
            case "Stereo":
            case "stereo": $table="stereomembers";
                           $club="stereo.php";
                            break;
            case "Rachana":
            case "rachana": $table="rachnamembers";
                            $club="rachana.php";
                            break;
         }
        $sql="INSERT INTO $table ( `name`, `USN`, `branch`, `sem`, `mail`, `phone`, `reason`) VALUES ( '$name', '$usn', '$branch', '$sem', '$mail', '$phone', '$reason');";
        

        if($con->query($sql)==true){
            echo "<script>
                alert('Event registration Successful');
                window.location.href='$club';
                </script>";
        }

        else{
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
        
        ?>
    
