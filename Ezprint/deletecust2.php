<?php session_start();

include('inc/connect.php');

$id=$_REQUEST['id'];

$sql="DELETE from customer where CustID='".$id."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE){
    echo"<script>alert('Data $id Had been deleted')</script>";
    session_unset();
    echo"<meta http-equiv=\"refresh\"content=\"0;URL=deletecust.php\">";

}else{
    echo"<p>";
    echo"<p style='text-align:center'>Error:".$sql."<br>".$conn->error;
    echo"<p>";
}
$conn->close();
