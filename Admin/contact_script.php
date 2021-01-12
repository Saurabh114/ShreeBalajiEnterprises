<?php
require 'config.php';
    if(isset($_POST['submit'])) {
        $name= mysqli_real_escape_string($con, $_POST['name']);
        $email= mysqli_real_escape_string($con, $_POST['email']);
        $subject= mysqli_real_escape_string($con, $_POST['subject']);
        $message= mysqli_real_escape_string($con, $_POST['message']);
        
        $q = "INSERT INTO contact(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
        if(mysqli_query($con, $q)){
                echo "<script>alert('Message Sent Successfully'); window.location.href='./index.php';</script>";
        }
        else{
            echo "<script>alert('Message NOT Sent, Try again!'); window.location.href='./index.php';</script>";
        }
    }
?>


