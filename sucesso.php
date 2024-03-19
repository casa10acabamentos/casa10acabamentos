<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefonefixo = $_POST['telefonefixo'];
    $whatsapp = $_POST['whatsapp'];
    $lojas = $_POST['lojas'];
    $mensagem = $_POST['mensagem'];
?>

<?php
$conteudo ='Contato via Site Casa10';
$conteudo .='<br/>';
$conteudo .='<br/>'.'Nome: ' .$nome;
$conteudo .='<hr>';
$conteudo .='<br/>'.'Email: ' .$email;
$conteudo .='<hr>';
$conteudo .='<br/>'.'Telefone Fixo: ' .$telefone;
$conteudo .='<hr>';
$conteudo .='<br/>'.'Whatsapp: ' .$whatsapp;
$conteudo .='<hr>';
$conteudo .='<br/>'.'Lojas: ' .$lojas;
$conteudo .='<hr>';
$conteudo .='<br/>'.'Mensagem: ' .$mensagem;

require_once(dirname(__FILE__) . '/class.phpmailer.php'); //caminho do arquivo da classe do phpmailer
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->Host = "mail.casa10acabamentos.com.br"; //seu servidor SMTP
$mail->SMTPAuth = true; // 'true' para autenticação
$mail->Username = "site@casa10acabamentos.com.br"; // usuário de SMTP
$mail->Password = "33615500"; // senha de SMTP
$mail->Port = '587'; // Porta de envio
$mail->From = "site@casa10acabamentos.com.br";
//coloque aqui o seu correio, para que a autenticação não barre a mensagem
$mail->FromName = $nome;
$mail->AddAddress("site@casa10acabamentos.com.br");
$mail->IsHTML(true); // envio como HTML se 'true'
$mail->Subject = "Contato via Site Casa10 Acabamentos";
$mail->Body = $conteudo;
$mail->AddAttachment('uploads/$file'); 
//$mail->AltBody = "Para mensagens somente texto";
//Verifica se o e-mail foi enviado
if(!$mail->Send())
{
    echo "Mensagem não enviada<br />";
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>
    alert('Mensagem enviada com sucesso! Em breve estaremos respondendo.');
    window.location.href = 'http://www.casa10acabamentos.com.br';
    </script>";
}
?>