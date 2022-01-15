<?php
require __DIR__ . "/../header.php";
require __DIR__ . "/../footer.php";


?>


<form method="post" action="Verification.php">
    <div>
        <label for="id-mail">Adresse mail :</label>
        <input type="email" name="mail" id="id-mail">
    </div>
    <div>
        <label for="id-message">Your message :</label>
        <textarea id="id-message" name="message"></textarea>
    </div>
    <div>
        <input type="submit" value="Send" name="submit">
    </div>
</form>
