<?php
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];

   $email_from = 'Easytut@salvar.com';
   $email_subject = "New Form Sumission";
   $email_body = "User Name: $name.\n".
                   "User Email; $visitor_email.\n".
                   "User Message: $message.n\";


   $to = "ameysathaye.pc2gmail.com";

   $headers = "From: $email_from \r\n";

   $headers .= "Reply-To: $visitor_email \r\n";

   mail($to,$email_subject,$email_body,$headers);

   header("Location: page2.html");



?>