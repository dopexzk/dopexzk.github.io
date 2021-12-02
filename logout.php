<?php
    session_start();
    if(isset($_GET["logout"]) && $_GET["logout"] == ture){
        session_unset();
    }
    header("location:login.php");
    if(!isset($_SESSION["user"])){
        header("location:login.php?errcode=2");
    }
?>