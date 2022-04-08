<?php
    $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    $fname = $_POST["name"];
    $email = $_POST["email"];
    $lname = $_POST["subject"];
    $headers = "From: $from";
    $message = $_POST["message"];

    $to = "gustavo_raniele@hotmail.com"; 
    $body = "User Message \n";
    $body .= " \n\n\t Name: ".$name;
    $body .= " \n\n\t Email: ".$email;
    $body .= " \n\n\t Subject: ".$subject;
    $body .= " \n\n\t Message: ".$message;

    if(mail($to, $subject, $body, $headers)){
        echo '<label class="success">Enviado<b>e-mail.</b></label>';
    }else{
        echo '<label class="error">Algo errado! Tente Novamnete</label>';
    }