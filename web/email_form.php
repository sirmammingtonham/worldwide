<?php 
if(isset($_POST['subscribe'])) {
    function died($error) {
        // your error code can go here
        echo "<script type='text/javascript'>alert('$error');</script>";
        die();
    }
 

    // validation expected data exists
    if(!isset($_POST['EMAIL']){
        died('Oops! You forgot to input your email.');       
    }

    $from = $_POST['EMAIL']; // this is the sender's Email address
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$from)) {
      died('The Email Address you entered does not appear to be valid.');
    }

    echo "<script type='text/javascript'>alert('Thank you, prepare for spam! Just kidding.');</script>";
    }
?>