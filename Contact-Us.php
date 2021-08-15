<?php
//  Declaration of Variable in php

$name = $_REQUEST['NameOfUser']
$email = $_REQUEST['EmailAddressOfUser']
$subject = $_REQUEST['Subject']
$message = $_REQUEST['UsersMessage']

// Check input fields
if(empty($name) || empty($email) || empty($subject) || empty($message))
{
    echo "Please fill all the fields."
}
else{
    mail("yashmittal100201@gmail.com","CXI Message",$message,"From:$name<$email>");
    echo "<script type='txt/javascript'>alert('Your message sent successfully.');
       window.history.log(-1);</script>";
}
?>
