            <!--FOOTER-->
            <footer>
                <div id="content">
                    <div class="foot-colmn">
                            <ul>
                                <li><a href="index.html#about">About Us</a></li>
                                <li><a href="index.html#team">Team</a></li>
                                <li><a href="index.html#news">News</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    
                    <div class="foot-colmn" id="github">
                        <a href="https://github.com/CentralProgramming" target="_blank" style="cursor: pointer;"><img src="images/GitHub-Mark.png" alt="GitHub">
                        <p style="color: #4d3300;">Visit us on GitHub</p></a>
                    </div>
                    

                        <div class="foot-colmn">
                            <ul>
                                <li><a href="https://dmoj.ca/organization/LCSS/users" target="_blank">DMOJ</a></li>
                                <li><a href="problems.html">Problems</a></li>
                                <li><a href="contests.html">Contests</a></li>
                                <li><a href="calendar.html#from_<?php
                                     if (basename($_SERVER['PHP_SELF']) == 'index.php'){
                                        echo 'home';
                                     }
                                     else if(basename($_SERVER['PHP_SELF']) == 'index.php#announcements'){
                                        echo 'news';
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
                                     ?>">Calendar</a></li>
                            </ul>
                        </div>
                    </div>
                
                <div id="strip">
                    <p id="copyright">&copy; <script>document.write(new Date().getFullYear())</script> Central Programming</p>
                    <p id="foot-top"><a onclick="topFunction()">Top</a></p>
                    <p id="error"><a href="contact.php?type=site">Report an Error</a></p>
                </div>
            </footer>


            <!--BACK TO TOP BUTTON-->
            <button onclick="topFunction()" id="topBtn">Top</button>

        </div>
    </body>
</html>