<!DOCTYPE HTML>
<html lang="en">
    
    <head>
        <!--META DATA-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="keywords" content="central programming club, london central, lcss, programming club, coding club">
        <meta name="description" content="<?php
                                     if (basename($_SERVER['PHP_SELF']) == 'index.php'){
                                        echo 'London Central Secondary School&apos;s Programming Club.';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'problems.php'){
                                        echo 'Practice your coding skills with Central Programming Club&apos;s weekly problems.';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'contests.php'){
                                        echo 'Information about all of the computer contests Central Programming Club will be participating in this school year.';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'resources.php'){
                                        echo 'Resources for learning Java and other programming languages by Central Programming Club.';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'calendar.php'){
                                        echo 'A calendar of events for Central Programming Club in 2017/2018.';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'contact.php'){
                                        echo 'A contact form to easily reach the Central Programming Club team.';
                                     }
                                     ?>">
        <meta name="author" content="Central Programming">
        <link rel="author" href="humans.txt">
        
        <!--FONTS-->
        <link href="https://fonts.googleapis.com/css?family=Monoton%7CPatua+One%7CGraduate%7CNunito:300,400,700%7CBowlby One" rel="stylesheet">
        
        <!--TAB TITLE AND ICON-->
        <title>
            <?php
                if(basename($_SERVER['PHP_SELF']) == 'problems.php'){
                    echo 'Weekly Problems';
                 }
                 else if(basename($_SERVER['PHP_SELF']) == 'contests.php'){
                    echo 'Computer Contests';
                 }
                 else if(basename($_SERVER['PHP_SELF']) == 'resources.php'){
                    echo 'Programming Resources';
                 }
                 else if(basename($_SERVER['PHP_SELF']) == 'calendar.php'){
                    echo 'Calendar';
                 }
                 else if(basename($_SERVER['PHP_SELF']) == 'contact.php'){
                    echo 'Contact Form';
                 }
                if(basename($_SERVER['PHP_SELF']) != 'index.php'){
                    echo ' &verbar; ';
                 }
                 echo 'Central Programming Club';
                 ?>
        </title>
        <link rel="shortcut icon" href="images/central-logo.png">
        
        <!--STYLESHEET AND JAVASCRIPT LINKS-->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/<?php
                                     if (basename($_SERVER['PHP_SELF']) == 'index.php'){
                                        echo 'home';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'problems.php'){
                                        echo 'problems';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'contests.php'){
                                        echo 'contests';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'resources.php'){
                                        echo 'resources';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'calendar.php'){
                                        echo 'calendar';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'contact.php'){
                                        echo 'contact';
                                     }
                                     ?>page.css">
        <script src="scripts/scripts.js"></script>
    </head>
    
    <body id="body" onresize="resize()<?php if(basename($_SERVER['PHP_SELF']) == 'resources.php'){echo '; fixNav()';}?>" onload="navJS()<?php 
                                                if(basename($_SERVER['PHP_SELF']) == 'calendar.php'){
                                                    echo '; setBack()';
                                                }
                                                else if(basename($_SERVER['PHP_SELF']) == 'contests.php'){
                                                    echo '; jsEnabled()';
                                                }
                                                else if(basename($_SERVER['PHP_SELF']) == 'resources.php'){
                                                    echo '; setCtgy()';
                                                }
                                                ?>">
        <script>
            function navJS() {
                if(window.matchMedia("(min-width: 651px)").matches) {
                    document.getElementById("countdown").style.display = "inline-block";
                }
                document.getElementById("navbar").className = "jsEnabled";   
            }
        </script>
        
        
        <div id="container">
            
            <!--HEADER IMAGE AND TITLE-->
            <header>
                <div class="parallax" id="header-image">
                <hr style="height: 150px; border: 0;">
                    <a href="index.php"><img id="logo" src="images/central-programming-club-logo.png" alt="Central Programming Club's Logo">
                    <div id="title">
                        <h1 id="central"><span class="purple">C</span>entral</h1>
                        <h1 id="programming"><span class="purple">P</span>rogramming</h1>
                        <h1 id="club"><span class="purple">C</span>lub</h1>
                    </div></a>
                </div>
            </header>

            
            <!--COUNTDOWN TIMER-->
            <div id="countdown">
                <h3>First meeting in:</h3>
                <p id="timer"></p>
                <span class="closebtn" style="cursor: pointer;" onclick="hideCountdown()">&times;</span>
            </div>