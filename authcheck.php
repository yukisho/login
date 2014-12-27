<?
session_start();

if(isset($_SESSION['authuser']))
    {

    }else{
    session_destroy();
    header("Location: login.php");
    }
?>