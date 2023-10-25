<?php
require ("./checkoutFormInfo.php");


function sanitize ($_post) {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $address = htmlspecialchars($_POST["address"]);
    $city = htmlspecialchars($_POST["city"]);
    $zipCode = filter_var($_POST["zipCode"], FILTER_SANITIZE_NUMBER_INT);
    $country = htmlspecialchars($_POST["country"]);

    return array(
        "firstName" => $firstName,
        "lastName" => $lastName,
        "email" => $email,
        "address" => $address,
        "city" => $city,
        "zipCode" => $zipCode,
        "country" => $country
    );
}

$sanitizedData = sanitize($_POST);

// var_dump ($sanitizedData);