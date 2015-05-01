<?php
session_start();

# Include the Autoloader (see "Libraries" for install instructions)
require './vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-5756b8c4f73cce7775648e42ad3efddb');
$domain = "sandbox3dd0e240247441d3aa86c1c10be6a49e.mailgun.org";

$required = array('subject' => 'subject', 'senderemail' => 'Your email address', 'message' => 'A message');
$errors = array();
$reciverEmail = 'saethor94@gmail.com';


// Loops through required and checks if post contains these variables
foreach ($required as $key => $value) {
    if (empty($_POST[$key])) {
        $errors[] = "{$value} is required";
    }
}

if( isset($_POST['g-recaptcha-response']) ){

     $captcha = $_POST['g-recaptcha-response'];

     $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdQNgYTAAAAAN43DJm5Zw8z01igDF50OlKjsQcb&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    
     $decodedResponse = json_decode($response, true);

     if($decodedResponse['success'] == 1) {
        if (isset($_POST['send'])) {

            if (empty($errors)) {
                $text = 'reply to: ' . htmlentities($_POST['senderemail'], ENT_QUOTES, 'UTF-8') . '
' . htmlentities($_POST['message'], ENT_QUOTES, 'UTF-8');

                # Make the call to the client.
                $result = $mgClient->sendMessage($domain, array(
                    'from'    => 'SindriFreyr.is <mailgun@sandbox3dd0e240247441d3aa86c1c10be6a49e.mailgun.org>',
                    'to'      => 'You <saethor94@gmail.com>',
                    'subject' => htmlentities($_POST['subject'], ENT_QUOTES, 'UTF-8'),
                    'text'    => $text
                ));

                $_SESSION['success'] = 'Message sent';
            }
        }
    }
    else
        $errors[] = 'Please check the "I\'m not a robot" box';
} 

$_SESSION['errors'] = $errors;
header("Location: /#/contact");