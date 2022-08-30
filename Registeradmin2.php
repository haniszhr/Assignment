
    <?php include('inc/connect.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
 
    $psw=$_POST['psw'];
    $phone=$_POST['phone'];


    $sql="INSERT INTO `admin`(`Admin_Email`, `Admin_Password`, `Admin_Name`, `Admin_Phone`) VALUES ('$email','$psw','$name','$phone')" or die("Error in inserting data");


    if($conn->query($sql)===TRUE){
        echo"<script>alert('Successfully record your data')</script>";
        echo"<meta http-equiv=\"refresh\"content=\"2;URL=loginadmin.php\">";
    
    }
    else{
        echo"Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();

    ?>



