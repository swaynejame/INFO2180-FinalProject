<?php
session_start();

if (isset($_POST['submit-form-user'])) {
    $emailAddress = $_POST['email'];
    $password = $_POST['password'];

    userLogin($emailAddress, $password);
}

function userLogin($emailAddress, $password)
{
    if (!(CheckLoginInDB($emailAddress, $password))) {
        echo "Login Failed";
        return false;
    }
}

function CheckLogin($emailAddress, $password)
{
    $connect = new PDO('mysql:host=localhost;dbname=;', 'username', 'password');
    $checkLogin = "SELECT * FROM `users` WHERE `email`='$emailAddress' and `password`='$password'";
    $stmt = $connect->query($checkLogin);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $_SESSION["userID"] = $result['id'];
        $_SESSION["firstname"] = $result['firstname'];
        $_SESSION["lastname"] = $result['lastname'];

        header("Location: scripts/dashboard.php"); //page you want to relocate to should be the dashboard
    } else {
        return false;
    }
}


//page you want to relocate to
if (isset($_SESSION["userID"])) {
    header("Location: scripts/dashboard.php");
}
