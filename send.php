<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $city = $_POST["city"];
    $post = $_POST["post"];
    $pay= $_POST["pay"];
    
    $email = "alex.shepherd.marshall@gmail.com";
    $subject = "Noviy zakaz";
    $message = "Имя: $name\nТелефон: $tel\nГород: $city\nПочта: $post\nСпособ оплаты: $pay";
    
    mail($email, $subject, $message);
}
?>
