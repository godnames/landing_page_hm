<?php
if(isset($_POST['submit'])){
    $to = "jagdeep@hospitalityminds.com";



   
    $email= $_POST['email'];
    
    $subject='subscription';
   

    $headers = 'From: '.$email . "\r\n";


    $body =  "email : " . $email;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>