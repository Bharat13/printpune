<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['phone'];
    $mailfrom = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "bharat@printpune.com";
    $txt = "imp" .$name .".\n\n" .$subject;


    mail($name, $subject, $mailfrom, $message);
    header("Location: index.php?send");
    echo (done);
}
