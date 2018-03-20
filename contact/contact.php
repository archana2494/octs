<?php
session_start();
function snatizeString($str) {
    return trim(strip_tags($str));
}

function validateForm($data) {
    if (isset($_SESSION['token']) && isset($data['csrf']) && ($data['csrf'] == $_SESSION['token'])) {
        if (empty($data['name']) || empty($data['email']) || empty($data['comment'])) {
            echo "<span class='error'>All Fields are required!</span>";
            return false;
        } else if (filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false) {
            echo "<span class='error'>Invalid Email Address</span>";
            return false;
        } else if (strlen(snatizeString($data['name'])) < 3) {
            echo "<span class='error'>Name seems wrong</span>";
            return false;
        } else if (strlen(snatizeString($data['comment'])) < 3) {
            echo "<span class='error'>Comment is too short</span>";
            return false;
        }
    } else {
        echo "<span class='error'>Some Thing Went Wrong!</span>";
        return false;
    }
    return true;
}

if (isset($_POST) && !empty($_POST)) {
    if (validateForm($_POST)) {
        $from = "Omniscient Ventures <archana@omniscientventures.com>";
        $subject = "Omniscient Ventures[enquiry from: " . snatizeString($_POST['name']) . ']';
        $to = "archana@omniscientventures.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1" . "\r\n";
        $headers .= "X-Mailer: PHP v" . phpversion() . "\r\n";
        $headers .= "From: " . $from . "\r\n";
        $headers .= "Reply-To: " . $from . "\r\n";
        $headers .= "Return-Path: " . $from . "\r\n";
        
        $message = '<html><body>';
        $message .= '<h2>Enquiry For:</h2>';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . snatizeString($_POST['name']) . "</td></tr>";
        $message .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST['email'] . "</td></tr>";
        $message .= "<tr><td><strong>Message:</strong> </td><td>" . snatizeString($_POST['comment']) . "</td></tr>";
        $message .= "</table>";
        $message .= "</body></html>";
        if (mail($to, $subject, $message, $headers)) {
            echo 'Your Query has been received, We will contact you soon.';
            die();
        }
        echo "<span class='error'>Sorry! Some Thing Went Wrong</span>";
        die();
    } else {
        die();
    }
}