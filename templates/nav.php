            <!--NAVIGATION-->
            <nav id="navbar">
                <div id="nav" class="topNav">
                    <a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'class="nav-active"';}?> href="index.php" id="home">Home</a>
                    <a <?php if (basename($_SERVER['PHP_SELF']) == 'problems.php'){echo 'class="nav-active"';}?> href="problems.php">Weekly Problems</a>
                    <a <?php if (basename($_SERVER['PHP_SELF']) == 'contests.php'){echo 'class="nav-active"';}?> href="contests.php">Contests</a>
                    
                    <!--RESOURCES SECTION (MOBILE)-->
                    <div class="resources">
                        <a <?php if (basename($_SERVER['PHP_SELF']) == 'resources.php'){echo 'class="nav-active"';}?> href="resources.php">Resources</a>
                        <div class="resources-content">
                            <a href="resources.php#sec_input">Input Types</a>
                            <a href="resources.php#sec_arrays">Arrays</a>
                            <a href="resources.php#sec_arraylists">Array Lists</a>
                            <a href="resources.php#sec_recursion">Recursion</a>
                        </div>
                    </div>
                    
                    <!--RESOURCES SECTION (DROPDOWN)-->
                    <div class="dropdown">
                        <a href="resources.php" class="dropbtn<?php if (basename($_SERVER['PHP_SELF']) == 'resources.php'){echo ' nav-active';}?> ">Resources</a>
                        <div class="dropdown-content">
                            <a href="resources.php#sec_input">Input Types</a>
                            <a href="resources.php#sec_arrays">Arrays</a>
                            <a href="resources.php#sec_arraylists">Array Lists</a>
                            <a href="resources.php#sec_recursion">Recursion</a>
                        </div>
                    </div>

                    <!--MOBILE LINKS OPEN/CLOSE-->
                    <a href="javascript:void(0);" id="icon" onclick="navButton()">&#9776;</a>
                </div>
            </nav>
            
            <noscript>
                <div class="alert">
                    <h3>This site works best with JavaScript Enabled</h3>
                </div>
            </noscript>