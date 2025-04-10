<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Az űrlap mezőinek értékei
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Az e-mail cím, ahová az üzenetet küldeni szeretnéd
    $to = "tripify@gmail.com";

    // E-mail tárgy
    $email_subject = "Kapcsolatfelvétel: " . $subject;

    // E-mail tartalom
    $email_body = "Név: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Üzenet:\n$message\n";

    // E-mail fejlécek
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // E-mail küldése
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Az üzenet sikeresen elküldve!";
    } else {
        echo "Hiba történt az üzenet küldése közben.";
    }
} else {
    echo "Hibás kérés.";
}
?>
