<?php
if(array_key_exists('delete', $_POST)) { 
    array_filter($_SESSION['cart'], function($item) {
        if($item['id'] !== $_POST['delete']) {
            return $item;
        }
    });
    unset($_POST['delete']);
}