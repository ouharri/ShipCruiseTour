<?php

class ContactController
{
    public function index()
    {
        $data = [];
        View::load('users/contact', $data);
    }

    public function sendEmail()
    {
        $to = 'ouharrioutman@gmail.com';

        function url(): string
        {
            return sprintf(
                "%s://%s",
                isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
                $_SERVER['SERVER_NAME']
            );
        }

        if ($_POST) {

            $name = trim(stripslashes($_POST['name']));
            $email = trim(stripslashes($_POST['email']));
            $subject = trim(stripslashes($_POST['subject']));
            $contact_message = trim(stripslashes($_POST['message']));

            $phone = trim(stripslashes($_POST['phone']));
            $company = trim(stripslashes($_POST['company']));

            if ($phone == '') {
                $phone = "N/A";
            }
            if ($company == '') {
                $company = "N/A";
            }


            if ($subject == '') {
                $subject = "Contact Form Submission";
            }

            // Set Message
            $message = "Email from: " . $name . "<br />";
            $message .= "Email address: " . $email . "<br />";
            $message .= "Phone: " . $phone . "<br />";
            $message .= "Company: " . $company . "<br />";
            $message .= "Message: <br />";
            $message .= nl2br($contact_message);
            $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

            // Set From: header
            $from = $name . " <" . $email . ">";

            // Email Headers
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            ini_set("sendmail_from", $to); // for windows server
            $mail = mail($to, $subject, $message, $headers);

            if ($mail) {
                echo "OK";
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}