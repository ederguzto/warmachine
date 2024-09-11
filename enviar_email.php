<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta dos dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Definir o destinatário do e-mail
    $para = 'warmachineclashofclansbrasil@gmail.com';
    
    // Definir o assunto do e-mail
    $assunto = 'Novo cadastro de ' . $nome;
    
    // Definir o corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem: $mensagem\n";
    
    // Definir os cabeçalhos do e-mail
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    // Enviar o e-mail
    if (mail($para, $assunto, $corpo, $headers)) {
        echo 'E-mail enviado com sucesso!';
    } else {
        echo 'Falha no envio do e-mail.';
    }
} else {
    echo 'Método de requisição inválido.';
}
?>
