<?php
require('database.php');
if(isset($_POST['submission'])){
    if($_FILES["imageposter"]["error"]==4){
        echo 
        'Image does not exist';
    }
    else{
        echo "Hello world";
        
        $fileName=$_FILES["imageposter"]["name"];
        // $fileSize=$_FILES["image"]["size"];
        $tmpName=$_FILES["imageposter"]["tmp_name"];
        $folder="admin/images/".$fileName;
        move_uploaded_file($tmpName,$folder);
        // $validImageExtension=['jpg','jpeg','png'];
        // $imageExtension=explode('.',$fileName);
        // $imageExtension=strtolower(end($imageExtension));
        $clubname=$_POST['cname'];
        $eventid=$_POST['eid'];
        $eventname=$_POST['ename'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $venue=$_POST['venue'];
        $organizer=$_POST['organizer'];
        $about=$_POST['aboutevent'];

       
        
           
            $query="INSERT INTO events VALUES('$clubname','$eventid','$eventname','$about','$date','$time','$venue','$organizer','$folder')";
            $res=mysqli_query($con,$query);
            $createtable="CREATE table " .$eventid."
             (
                name varchar(20),
                USN varchar(20),
                branch varchar(20),
                sem int(5),
                phone bigint(10),
                primary key(usn)

            )";
            $res2=mysqli_query($con,$createtable);
            if($res && $res2){
                echo "<script>
                alert('Event added Successfully');
                window.location.href='eventsadmin.php'
                </script>";
                
            }
    
            else{
                echo "ERROR: $sql <br> $con->error";
            }
            
            

            
        }
    }

else{
    echo "error kast";
}
?>