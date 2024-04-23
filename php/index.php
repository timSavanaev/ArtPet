<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Example</title>
</head>
<body>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "savanaevtnbv@gmail.com";
    $subject = "Новое сообщение с формы";
    $message = "Имя: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Сообщение: " . $_POST['message'];

    $headers = "From: отправитель@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено.";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>
</body>
<html>

</html>