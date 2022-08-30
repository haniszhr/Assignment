<?php

session_start();
if (isset($_SESSION['c_email']))
{
    //Destroy
    $_SESSION = array();
    session_destroy();
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=about.php\">";
}
?>