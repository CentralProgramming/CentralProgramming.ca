<?php
    
    if(empty($_GET["type"])){
            $type = "";
    }
    else {
        $type = test_input($_GET["type"]);
    }
    if(empty($_GET["check"])){
            $check = "";
    }
    else {
        $check = test_input($_GET["check"]);
    }
    $errors = array("name"=>"",
                    "recip"=>"",
                    "comment"=>"");
    $messageSent = false;
    $name = $email = $recip = $comment = "";

    if($type == "site"){
        $comment = "
Device/browser error found on:
Page error found on:
Error:";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $sendMessage = true;

        if(empty($_POST["name"])){
            $errors["name"] = "Name is required";
            $sendMessage = false;
        }
        else{
            $name = test_input($_POST["name"]); 
            if(!preg_match("/^[a-zA-z ]*$/",$name)){
                $errors["name"] = "Name can only contain letters and white spaces";
                $sendMessage = false;
            }
        }

        if(empty($_POST["email"])){
            $email = "";
        }
        else {
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["sendTo"])){
            $errors["recip"] = "Must select at least one recipient";
            $sendMessage = false;
        }
        else {
            $recip = test_array($_POST["sendTo"]);
        }

        if(empty($_POST["comment"])){
            $errors["comment"] = "Comment is required";
            $sendMessage = false;
        }
        else{
            $comment = test_input($_POST["comment"]);
        }

        if($sendMessage == true){
            $send_to = implode(",", $recip);
            if($type == "site"){
                $subject = "Central Programming Website Error";    
            }
            else{
                $subject = "Central Programming Contact Form";   
            }
            if($email == ""){
                $headers = "From: contact@centralprogramming.ca";
            }
            else{
                $headers = "From: " . $email;
            }

            $message = 
"You are recieving this email in response to a comment made on centralprogramming.ca.

Sender: $name
Email: $email
Comment: $comment";


            mail($send_to, $subject, $message, $headers);

            $messageSent = true;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function test_array($data) {
        $data = array_map("trim", $data);
        $data = array_map("stripslashes", $data);
        $data = array_map("htmlspecialchars", $data);
        return $data;
    }
?>