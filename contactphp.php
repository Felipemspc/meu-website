<?php

$nome = htmlspecialchars($_POST['nome-box']);
$email = addslashes($_POST['email']);
$mensagem = htmlspecialchars($_POST['mensagem']);

$para = "felipematosoficial@gmail.com";
$jobs = "Clientes Website - FelipeMattos";




$corpo = "Nome: " . $nome . "\n" . $email . "Email: " . $email . "\n" . "Mensagem: " . $mensagem;


$cabecalho = "From: felipematosoficial@gmail.com " . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion() . "\r\n" .
    "Content-Type: text/plain; charset=UTF-8";

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if (!$email) {
    // Trate o erro de e-mail inválido
}



if (mail($para, $jobs, $corpo, $cabecalho)) {
    echo "E-mail enviado com sucesso!";
} else {
    $error = error_get_last();
    echo "Houve um erro ao enviar o email: " . $error['message'];
}



?>