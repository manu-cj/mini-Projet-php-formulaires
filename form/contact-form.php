<?php

require __DIR__ . '/Verification.php';

if(isset($_POST['submit'])) {
    // Getting secured form data.
    $mail = getSecuredStringPostData('mail');
    $message = getSecuredStringPostData('message') ?>

    <table>
        <tr>
            <td>mail</td>
            <td>Message</td>
        </tr>
        <tr>
            <td><?= $mail ?></td>
            <td><?= $message ?></td>
        </tr>
    </table>

    <a href="/contact.php" >
        Vers le formulaire de contact
    </a>
    <?php
}
else {
    header('Location: /contact.php');
}
