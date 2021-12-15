<?php

if (isset($_POST['send'])) {
    if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $message = $_POST['message'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email,$subject,$message,$header);
        if ($mail) {
            echo "<h4> Email enviado con exito! </h4>";
        } 
    }
    
}