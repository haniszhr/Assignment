<?php 
session_start();
if(!isset($_SESSION['c_email']))
{
    $_SESSION['c_email']=$_POST['c_email'];
    $_SESSION['c_psw']=$_POST['c_psw'];
    $cemail=$_SESSION['c_email'];
}
include('inc/connect.php');
$sql="SELECT * FROM customer WHERE Cust_Email='".$_SESSION['c_email']."' AND Cust_Password='".$_SESSION['c_psw']."'";
$result=$conn->query($sql);

if($result->num_rows==0){
    echo "<script>alert('login failed')</script>";
    session_unset();
    echo"<meta http-equiv=\"refresh\"content=\"0;URL=home.html\">";
}
else{
    include("custmenu.php");
}
$conn->close();
?>

