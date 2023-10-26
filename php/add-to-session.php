<?php
session_unset();
session_start();
unset($_SESSION['article']);
if (isset($_GET['id'])){
    $_SESSION['article'][$_GET['id']] = 1;
}
header('location:views/index.view.php');