<?php
//Variáveis

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $telefone = $_POST['phone'];
  $mensagem = $_POST['message'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Arial;
  font-size:14px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' >
            <tr>
              <td>
  <tr>
                 <td width='500'>Nome: <b>$nome</b></td>
                </tr>
                <tr>
                  <td width='320'>E-mail: <b>$email</b></td>
     </tr>
      <tr>
                  <td width='320'>Telefone: <b>$telefone</b></td>
                </tr>
                <tr>
                  <td width='320'>Mensagem: <b>$mensagem</b></td>
                </tr>
            </td>
          </tr>
          <tr>
            <td>Este e-mail foi enviado dia <b>$data_envio</b> as <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

    // emails para quem será enviado o formulário
   $emailenviar = $email;
   $destino = "contato@acquaart.com";
   $assunto = "Contato pelo Site";

   // É necessário indicar que o formato do e-mail é html
   $headers  = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       $headers .= 'From: '.$nome. '<'.$email.'>';
   //$headers .= "Bcc: $EmailPadrao\r\n";

   $enviaremail = mail($destino, $assunto, $arquivo, $headers);
   if($enviaremail){
   $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
   echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
   } else {
   $mgm = "ERRO AO ENVIAR E-MAIL!";
   echo "";
 }










 ?>
