<?php
$connections = mysqli_connect('localhost', 'root', '', 'istock-users-credentials');
if(isset($_POST["submit-signup"])){
    $userName = $_POST["username"];
    $emailAdderss = $_POST["email"];
    $usersRole = $_POST["usersRole"];
    $PASSWORD = $_POST["password"];


$submitting = "INSERT INTO `login_signup_form` (userName, emailAddress, usersRole, PASSWORD) VALUES ( '$userName', '$emailAdderss', '$usersRole', '$PASSWORD')";

if(mysqli_query($connections, $submitting)){
    header("location:index.html");
}else{
    echo("Try another emailAdress...");
}}

if(isset($_POST["submit-login"])){
    $emailAdderss = $_POST["login-email"];
    $PASSWORD = $_POST["login-password"];
    

    $selecting = "SELECT *FROM login_signup_form WHERE emailAddress = '$emailAdderss' AND PASSWORD = '$PASSWORD'";
    $result=mysqli_query($connections, $selecting);
    $record=mysqli_fetch_assoc($result);
    if($record){
    
        session_start();
        $_SESSION['id']=$record['userId'];
        $_SESSION['username']=$record['userName'];
        $_SESSION['emailAdress']=$record['emailAddress'];
        header("location:index.html");
    }
    else{
        echo("Try again with correct credentials...");
    }
}
?>