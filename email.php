<?php

if (isset($_POST['send'])) {
    if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $to = "contacto@st-austral.com";
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $message = $_POST['message'];
        $header = "De: $name" . "\r\n";
        $header.= "Email: $email" . "\r\n";
        $header.= "Empresa: $company" . "\r\n";
        $header .= "Asunto: $subject" . "\r\n";
        $header .= "$message";

        @mail($to,$subject,$header);
        //if ($mail) {
            //echo "<h4> Email enviado con exito! </h4>";
        //} 
    }
    
}