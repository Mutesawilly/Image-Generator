<?php
session_start();
session_destroy();
if(mysqli_query(session_destroy())){
    header("location:home.php");
}
?>