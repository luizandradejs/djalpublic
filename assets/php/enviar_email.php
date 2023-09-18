<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "djalmafernandes@dferbandeseletroservices.com.br";
    $subject = "Nova mensagem do formulário de contato";
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $headers = "From: $email";
    
    if (mail($recipient_email, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }
}
?>
