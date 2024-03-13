<?php
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $fone = addcslashes($_POST['fone']);
    $texto = addcslashes($_POST['texto']);
    $para = "lucasgaldinorosa2904@gmail.com";
    $assunto = "Contato - Portifólio";
    $body = "Nome: ".$nome."\nE-mail: ".$email."\nTelefone: ".$telefone."\nMensagem: ".$texto;
    $cabecalho = "From: lucasgaldinorosa2904@gmail.com"."\n"."Reply-to".$email."\n"."X=Mailer:PHP/".phpversion();
    // if(mail($para,$assunto,$body,$cabecalho)) {
    //     echo("E-mail enviado com sucesso !");
    // } else {
    //     echo("Erro ao enviar o E-mail ");
    // }
    ?>