<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['messsage'];

    $mailto = "enewcombe30@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $header);
    header("Location: contact.html");

}
?>;