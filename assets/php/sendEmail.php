<?php
// Access form data
if(isset($_POST['submit'])){
    // Compose email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];

    $email_from = 'portfolio@sjpret.com';
    $email_subject = "New Form Submission On Your Portfolio";
    $email_body = "You have received a new message from the user $name.\n 
Email address: $email\n
Phone: $phone\n
Subject: $subject";

    // Send email
    $to = 'sjpret12345@gmail.com';
    $cc = '';

    $headers = "From: <$email_from> \r\n";
    
    // Add cc recipients to headers only if $cc is not empty
    if (!empty($cc)) {
        $headers .= "Cc: $cc \r\n";
    }

    mail($to, $email_subject, $email_body, $headers);


    // Redirect to the same page to prevent form resubmission
    if(isset($_SERVER['HTTP_REFERER'])){
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        // Handle the case where there is no previous page to go back to
        // For example, you can provide a default URL to redirect to.
        header("/index.php"); // Replace 'default_page.php' with your desired default page
    }    
    exit;
}
?>
