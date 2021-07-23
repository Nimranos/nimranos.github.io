<?php
$toEmail = "nahbruhuwontfindit@gmail.com";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
print "<p class='success'>Wiadomość wysłana. Dzięki!</p>";
} else {
print "<p class='Error'>Wystąpił błąd podczas wysyłania wiadomości :(</p>";
}
?>