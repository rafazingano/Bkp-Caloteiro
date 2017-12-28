<?php
ini_set('default_charset','UTF-8');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$datanascimento = $_POST['datanascimento'];
foreach($_POST["politica"] as $politica) 
$politica = $_POST['politica'][0];
$arquivo = $_FILES["arquivo"];
$arquivo_nome = $arquivo['name'];
$arquivo_caminho = $arquivo['tmp_name'];
$redirect = $_POST["www.vocenopepsitwistland.com.br"];

$mensagem = "NOME: $nome <br> EMAIL: $email <br> TELEFONE: $telefone <br> DATA NASCIMENTO: $datanascimento <br> CPF: $cpf <br> POLITICA: $politica <br> NUMERO DA SORTE: $politica" ;
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer || TROQUE PELO SEU CAMINHO DA CLASSE
require_once('class/class.phpmailer.php');

// Inicia a classe PHPMailer
$mail = new PHPMailer();
$mail->SMTPDebug = 2;
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.vocenopepsitwistland.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'contato@vocenopepsitwistland.com.br'; // Usuário do servidor SMTP
$mail->Password = '*()!@#123qwe@ASD'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato@vocenopepsitwistland.com.br"; // Seu e-mail
$mail->Sender = "contato@vocenopepsitwistland.com.br"; // Seu e-mail
$mail->FromName = "Contato Pepsi Twistland"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@vocenopepsitwistland.com.br');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject = "Cadastro no Voce no Pepsi Twistland"; // Assunto da mensagem
$mail->Body = $mensagem;
$mail->AltBody = 'AQUI VOCÊ PODE CONFIGURAR UMA MENSAGEM SEM FORMATAÇÃO HTML';

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAttachment($arquivo_caminho, $arquivo_nome); // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
echo "E-mail enviado com sucesso!";
} else {
echo "Não foi possível enviar o e-mail.

";
echo "Informações do erro:
" . $mail->ErrorInfo;
}

header("Location: $redirect");