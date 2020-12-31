<?php
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $emailId = $_POST['email'];
   $project = $_POST['project'];
   $message = $_POST['message'];

   $email_from = $emailId;
   $email_subject = "New Message";
   $email_body= "User Name :".$name."\n".
                   "User Email :".$emailId."\n". 
                       "Project :".$project."\n".
                          "message :" $message."\n";

   $to = "chahsan1393@gmail.com";

   $headers = "From :" $email_from." \r\n";
   $headers .= "Reply-To:"$emailId." \r\n";

   mail($to,$email_subject,$email_body,$headers);
   echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.";
   // header("Location: index.html")
}
?>