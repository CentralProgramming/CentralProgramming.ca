<?php
    $errors = array("name"=>"",
                    "site"=>"");
    $messageSent = false;
    $name = $site = "";


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

        if(empty($_POST["site"])){
            $errors["site"] = "Website is required";
            $sendMessage = false;
        }
        else{
            $site = test_input($_POST["site"]); 
            if(!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i",$site)){
                $errors["site"] = "Website can only contain letters and white spaces";
                $sendMessage = false;
            }
        }

        if($sendMessage == true){
            $send_to = "ashley@centralprogramming.ca";
            
            $subject = "Central Programming Contest Submission";   

            $message = 
"You are recieving this email in response to a contest submission made on centralprogramming.ca.

Contest name: $name
Contest website: $site";


            mail($send_to, $subject, $message);

            $messageSent = true;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>