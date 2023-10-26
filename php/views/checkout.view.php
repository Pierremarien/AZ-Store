<?php
require "partials/head.php";

require "partials/nav.php";

// var_dump($_POST);
function sanitizeValidation ($_post) {
    if (isset($_POST["firstName"]) and !empty($_POST["firstName"]) and strlen($_POST["firstName"]) > 2 and strlen($_POST["firstName"]) < 20) {
        $firstName = htmlspecialchars($_POST["firstName"]);
    } else {
        echo "A valide first name is required";
    }

    if (isset($_POST["lastName"]) and !empty($_POST["lastName"]) and strlen($_POST["lastName"]) > 2 and strlen($_POST["lastName"]) < 20) {
        $lastName = htmlspecialchars($_POST["lastName"]);
    } else {
        echo "A valide last name is required";
    }

    if (isset($_POST["email"]) and !empty($_POST["email"]) and filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) and preg_match("/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/", $_POST["email"])) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    } else {
        echo "A valide email is required";
    }

    if (isset($_POST["address"]) and !empty($_POST["address"]) and strlen($_POST["address"]) > 2 and strlen($_POST["address"]) < 40) {
        $address = htmlspecialchars($_POST["address"]);
    } else {
        echo "A valide address is required";
    }

    if (isset($_POST["city"]) and !empty($_POST["city"]) and strlen($_POST["city"]) > 2 and strlen($_POST["city"]) < 20) {
        $city = htmlspecialchars($_POST["city"]);
    } else {
        echo "A valide city is required";
    }

    if (isset($_POST["zipCode"]) and !empty($_POST["zipCode"]) and strlen($_POST["zipCode"]) > 2 and strlen($_POST["zipCode"]) < 20) {
        $zipCode = filter_var($_POST["zipCode"], FILTER_SANITIZE_NUMBER_INT);
    } else {
        echo "A valide zip code is required";
    }

    if (isset($_POST["country"]) and !empty($_POST["country"]) and strlen($_POST["country"]) > 2 and strlen($_POST["country"]) < 20) {
        $country = htmlspecialchars($_POST["country"]);
    } else {
        echo "A valide country is required";
    }

    if (isset($firstName) and isset($lastName) and isset($email) and isset($address) and isset($city) and isset($zipCode) and isset($country)) {
        echo "Thank you for your order!";
        return $sanitizedData = array(
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "address" => $address,
            "city" => $city,
            "zipCode" => $zipCode,
            "country" => $country
        );
    }
    // echo "<pre>";
    // var_dump($sanitizedData);
    // echo "</pre>";
}

if(array_key_exists('submit', $_POST)) { 
    sanitizeValidation($_POST);
} 
?>

<form method="POST" action="" class="form">
    <div>
        <label for="firstName">Firstname:</label>
        <input type="text" name="firstName" id="firstName" minlength="3" maxlength="20" required>
    
        <label for="lastName">Lastname:</label>
        <input type="text" name="lastName" id="lastName" minlength="3" maxlength="20" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
    
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" minlength="3" required>
    </div>

    <div>    
        <label for="city">City:</label>
        <input type="text" name="city" id="city" minlength="3" maxlength="20" required>

        <label for="zipCode">Zip Code:</label>
        <input type="number" name="zipCode" id="zipCode" minlength="3" maxlength="20" required>
    </div>

    <div>
        <label for="country">Country:</label>
        <input type="text" name="country" id="country" minlength="3" maxlength="20" required>
    </div>
    
    <div>
        <input type="submit" name="submit" value="Submit" class="btn">
    </div>
</form>

<?php

require "partials/footer.php";
?>

