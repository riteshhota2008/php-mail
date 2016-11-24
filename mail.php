<?php

if (isset($_POST['submit']))   // Name of the Submit button

{
    $to = "riteshhota.2008@gmail.com";  // this is your Email address (admin)
    $from = $_POST['email'];    // this is the sender's Email address
    $name = $_POST['name']; // Getting input from the name field - Sender Name
    $subject = "Subject 1"; // Subject name which will be received by the admin
    $subject2 = "Subject 2";    // Subject name which will be recieved by the sender
    $message = $name . " wrote the following on the feedback/contact us form of Organisation Name:" . "\n\n" . $_POST['message'];    //  message to be delivered to the admin
    $message2 = "Hello " . $name . ".\n\nHere is a copy of your message from Organisation Name Contact us form:\n\n" . $_POST['message'] . "\n\nRegards,\nOrganisation Name";   // message to be delivered to the sender

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);   // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly."; // Remove the comment if you want to display the message on the same screen
    echo("<script>alert('Mail sent successfully!')</script>");  // Confirmation using pop up
    echo("<script>window.location = 'index.html';</script>");
    // You can also use         header('Location: thank_you.php');          to redirect to another page.

}

?>