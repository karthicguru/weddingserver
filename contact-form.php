<?php
  $name = $_POST['name'];
  $count = $_POST['guests'];
  $event = $_POST['attending'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

   $email_from = 'RSVP@babuwedskarthiga.com';
 
    $email_subject = "New RSVP submission";
 
    $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

     $to = "karthick234@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
  $data = "success";
  echo json_encode($data);
?>
