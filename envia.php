<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "euwendypedrosa@gmail.com";
    $assunto = "Mesagem Portfólio";

    $corpo = "Nome: ".$nome."\n"."E-Mail: ".$email."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: euwendypedrosa@gmail.com"."\n"."Replay-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?>