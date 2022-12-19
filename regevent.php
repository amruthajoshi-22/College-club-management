<?php
require('database.php');
if(isset($_POST['submission'])){

         $eid=$_POST['eid'];
         $name=$_POST['uname'];
         $usn=$_POST['usn'];
         $branch=$_POST['branch'];
         $sem=$_POST['sem'];
        
         $phone=$_POST['phone'];
        
         $table=$eid;
        $sql="INSERT INTO $table (`name`, `USN`, `branch`, `sem`, `phone`) VALUES ('$name', '$usn','$branch', '$sem', '$phone');";
        

        if($con->query($sql)==true){
              echo "<script>
                alert('Event registration Successful');
                window.location.href='events.php';
                </script>";
           }

        else{
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
}

else{
    alert("Registration Unsuccessful");
}
        ?>
    
