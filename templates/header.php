<!DOCTYPE HTML>
<html lang="en">
    
    <head>
        <!--META DATA-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="keywords" content="central programming club, programming club, central secondary, central clubs, london central">
        <meta name="description" content="London Central Secondary School's Programming Club.">
        <meta name="author" content="Central Programming">
        
        <!--FONTS-->
        <link href="https://fonts.googleapis.com/css?family=Monoton%7CPatua+One%7CGraduate%7CNunito:300,400,700%7C" rel="stylesheet">
        
        <!--TAB TITLE AND ICON-->
        <title>Central Programming</title>
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
        <div id="container">
            
            <!--HEADER IMAGE AND TITLE-->
            <header>
                <div class="parallax" id="header-image">
                <hr style="height: 150px; border: 0;">
                    <img id="logo" src="images/logo-TEMP.png">
                    <div id="title">
                        <h1 id="central"><span class="purple">C</span>entral</h1>
                        <h1 id="programming"><span class="purple">P</span>rogramming</h1>
                        <h1 id="club"><span class="purple">C</span>lub</h1>
                        </div>
                </div>
            </header>

            
            <!--COUNTDOWN TIMER-->
            <div id="countdown">
                <h3>First meeting in:</h3>
                <p id="timer"></p>
                <span class="closebtn" style="cursor: pointer;" onclick="hideCountdown()">&times;</span>
            </div>