<?php
         $to = "awanish@gmail.com";
         $subject = $_POST['subject'];
         
         $message = $_POST['message'];
         $email=$_POST['email'];
         $header = "From:$email \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Feedback Successful..";
         }else {
            echo "Message could not be sent...";
         }
      ?>