
    <?php include('inc/connect.php');
    $cname=$_POST['cname'];
    $cemail=$_POST['cemail'];
 
    $caddress=$_POST['caddress'];
    $cpsw=$_POST['cpsw'];
    $cphone=$_POST['cphone'];
    $area=$_POST['area'];

    $sql="INSERT INTO `customer`(`Cust_Email`, `Cust_Password`, `Cust_Name`, `Cust_Phone`,`Cust_Address`,`Registration_Date`,`Area_Delivery`) VALUES ('$cemail','$cpsw','$cname','$cphone','$caddress',CURDATE(),'$area')" or die("Error in inserting data");


    if($conn->query($sql)===TRUE){
        echo"<script>alert('Successfully record your data')</script>";
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=logincust.php\">";
    
    }
    else{
        echo"Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();

    ?>



