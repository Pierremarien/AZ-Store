<?php
session_start();
//unset($_SESSION['article']);
if (isset($_GET['id'])){
    if (isset($_SESSION['article'][$_GET['id']])){
        $_SESSION['article'][$_GET['id']] = $_SESSION['article'][$_GET['id']] + 1;
    } else {
        $_SESSION['article'][$_GET['id']] = 1;
    } 
}
header('location:views/index.view.php');