 <?php

 if (isset($_POST['submit'])){
     $Firstname = $_POST['First name'];
     $Lastname = $_POST['Firstname'];
     $mailFrom = $_POST['mail'];
     $messaage = $_Post['message'];
     

     $mailTo ="nakid220@gmail.com";
     $headers = "From: ".$mailFrom;
     $txt ="You have received an email from ".$Firstname.".\n\n.".$messaage;

     mail($mailTo, $Lastname, $txt,  $headers);
     header("Location: index.php?mailsend");
    
 }