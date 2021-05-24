<?php


include("phpmailer/class.phpmailer.php");

$name  =$_POST["contact-name"];
$email = $_POST["contact-email"];
$message = $_POST["contact-message"];
$name 	="jegancs0215@gmail.com";
$pass	="9715365519Aa@";
$email	=$_POST["contact-email"];
$to = "contact@cyphershield.tech";

//Send Mail Function

$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Username = $name;
$mail->Password = $pass;
$mail->SMTPSecure = "ssl"; // SSL FROM DATABASE
$mail->Host = 	    "smtp.gmail.com";// Host FROM DATABASE
$mail->Port = 		"465";// Port FROM DATABASE
$mail->setFrom($name);
$mail->AddAddress($to);
$mail->message  = $message;
$mail->IsHTML(true);
$mail->Body    = "<p>Your Name:  $name</p>  <p>Email:  $email</p> <p>message:  $message</p> ";

//check The Email Statuss:


if($mail->Send())
{  
   

    header("Location: index.php");

  
} else {
    die( "Error: Email Send Unsucessfully. Something went Wrong.");
}




?>