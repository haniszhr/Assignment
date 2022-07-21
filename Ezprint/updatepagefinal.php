<?php session_start();

include('inc/connect.php');

$id=$_REQUEST['uid'];
$page=$_POST['Page'];
$filename=$_POST['File_Name'];


$sql="UPDATE files set Page='".$page."' where FileID='".$id."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{
   
      
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=download.php\">";

    }
  

else{
    echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
}

$conn->close();
 ?>
