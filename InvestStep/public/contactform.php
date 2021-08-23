<?php 

if (isset($_POST['name']) &&
isset($_POST['subject'])&&
isset($_POST['mail'])&&
isset($_POST['message'])){
  
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    

    $mailTo = "investep@protonmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received and email from ".$name.".\n\n".$message;

    echo "it worked";
    
echo $mailTo;
echo $headers;
echo $txt;
echo $subject;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
    

}


 
?>