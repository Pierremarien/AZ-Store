<?php
require ("./checkoutSanitize.php");


switch ($sanitizedData){
    case !isset($sanitizedData["firstName"]) and empty($sanitizedData["firstName"] and min($sanitizedData["firstName"]) < 2) and max($sanitizedData["firstName"] > 20):
        echo "First name is required";
        break;
    case !isset($sanitizedData["lastName"]) and empty($sanitizedData["lastName"]) and min($sanitizedData["lastName"]) < 2 and max($sanitizedData["lastName"] > 20):
        echo "Last name is required";
        break;
    case !isset($sanitizedData["email"]) and empty($sanitizedData["email"] and !preg_match("[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$", $sanitizedData["email"]):
        echo "Email is required";
        break;
    case !isset($sanitizedData["address"]) and empty($sanitizedData["address"]) and min($sanitizedData["address"] < 2):
        echo "Address is required";
        break;
    case !isset($sanitizedData["city"]) and empty($sanitizedData["city"]) and min($sanitizedData["city"] < 2) and max($sanitizedData["city"] > 20):
        echo "City is required";
        break;
    case !isset($sanitizedData["zipCode"]) and empty($sanitizedData["zipCode"]) and min($sanitizedData["zipCode"] < 2) and max($sanitizedData["zipCode"] > 20):
        echo "Zip code is required";
        break;
    case !isset($sanitizedData["country"]) and empty($sanitizedData["country"]) and min($sanitizedData["country"] < 2) and max($sanitizedData["country"] > 20):
        echo "Country is required";
        break;
    default:
        echo "Thank you for your order!";
        break;
}
?>