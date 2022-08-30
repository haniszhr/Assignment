
     <?php

$conn=mysqli_connect('localhost','root','','ezprint');



    
   
    $semail=$_POST['s_email'];
    $staffname=$_POST['s_name'];
    $saddress=$_POST['s_address'];
    $spsw=$_POST['s_psw'];
    $sphone=$_POST['s_phone'];


    $sql="INSERT INTO `staff`(`Staff_Email`, `Staff_Password`, `Staff_Name`, `Staff_Phone`,`Staff_Address`) VALUES ('$semail','$spsw','$staffname','$sphone','$saddress')";


    if($conn->query($sql)===TRUE){
        echo"<script>alert('Successfully record your data')</script>";
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=loginstaff.php\">";
    
    }
    else{
        echo"Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();

    ?>



