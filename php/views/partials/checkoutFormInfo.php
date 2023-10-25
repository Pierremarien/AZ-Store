<?php
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
        <input type="text" name="city" id="city" minlength="3" required>

        <label for="zipCode">Zip Code:</label>
        <input type="number" name="zipCode" id="zipCode" minlength="3" required>
    </div>

    <div>
        <label for="country">Country:</label>
        <input type="text" name="country" id="country" minlength="3" required>
    </div>
    
    <div>
        <input type="submit" name="submit" value="Submit">
    </div>
</form>