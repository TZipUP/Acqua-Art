<?php
header('Content-Type: text/html; charset=UTF-8');

  if(isset($_POST['submit'])){
    $to = "contato@acquaart.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Formulário contato site | " . $name;
    $subject2 = "Acqua ART | Cópia de seu contato pelo site";
    $message = "Contato enviado pelo formulario do site \n\n De: " . $name . "\n\n Telefone: " .$phone. "\n\n Mensagem: ". $_POST['message'];
    $message2 = "Obrigado pelo contato " . $name . "\n\n Aqui está uma cópia da mensagem que você enviou para Acqua Art. \n\n" . $_POST['message'] . "\n\n  Responderemos você em breve!";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
  }

 ?>
