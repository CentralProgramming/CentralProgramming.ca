<!--HEAD & HEADER-->
<?php require_once "templates/header.php"; ?>
            
<!--NAV & ALERT-->
<?php require_once "templates/nav.php"; ?>  

            
<!--FORM SCRIPT-->
<?php require_once "scripts/contestscript.php"; ?>


            <!--ERRORS-->
            <?php
                foreach($errors as $x => $alert){
                    if($alert!=""){
                        echo "<div class='alert' id='error'><h3>Error: " . $alert . "</h3></div>";
                    }
                }
                if($messageSent == true){
                    echo "<div class='alert' id='success'><h3>Your message has been sent. Thank you for your feedback.</h3></div>";
                }    
            ?>

            
            <hr style="height: 25px; border: 0;">
            
            <section id="upcoming">
                <h2>Upcoming Contests</h2>
                <div class="contest-container">
                    <div class="column">
                    <div class="contest">

                        <div class="front" style="background-image: url(images/uwo.jpg);">
                            <p class="date">3/?/18</p>
                            <hr style="height: 20%; border: 0;">
                            <h3>ECOO</h3>
                            <div class="info" onclick="flipBack(this)">More info</div>
                        </div>

                        <div class="back">
                                <span class="turn" onclick="flipFront(this)">&orarr;</span>
                                <h3>ECOO</h3>
                                <ul>
                                    <li><b>Date: </b> Late March 2018</li>
                                    <li><b>Type: </b> Group</li>
                                    <li><b>Location: </b> TBA</li>
                                    <li><b>Organizer: </b> Educational Computing Organization of Ontario</li>
                                </ul>
                                <p class="description">The ECOO Programming Contest is a group contest in three rounds. Teams of four work on one computer to solve problems. Only a few teams per school are allowed. More information will be available closer to the event.</p>
                                <a href="http://ecoocs.org/" class="block" target="_blank">Website</a>
                                <a href="http://ecoocs.org/problems.php" class="block" target="_blank">Sample Problems</a>
                            </div>

                    </div>
                </div>
                </div>
            </section>
            
            <hr style="height: 50px; border: 0;">
            
            
            <section id="future">
                <h2>Future Contests</h2>
                <div class="contest-container">

                <div class="column">
                    <div class="contest">

                        <div class="front" style="background-image: url(images/com3.jpeg);">
                            <p class="date">3/?/18</p>
                            <hr style="height: 20%; border: 0;">
                            <h3>Central #2</h3>
                            <div class="info" onclick="flipBack(this)">More info</div>
                        </div>

                        <div class="back">
                                <span class="turn" onclick="flipFront(this)">&orarr;</span>
                                <h3>Central #3</h3>
                                <ul>
                                    <li><b>Date: </b> March 2018</li>
                                    <li><b>Type: </b> Group</li>
                                    <li><b>Location: </b> Rroom 117</li>
                                    <li><b>Organizer: </b> Central Programming Club</li>
                                </ul>
                                <p class="description">This contest is to serve as practice for the upcomming ECOO Programming Contest and introduce group contests. The format and questions will be modeled after the ECOO, with teams of up to four. More information will be available closer to the event.</p>
                                <a href="http://ecoocs.org/problems.php" class="block" target="_blank">Sample Problems</a>
                            </div>
                        
                    </div>
                </div>

                
                </div>
            </section>
            
            
            
            <hr style="height: 50px; border: 0;">
            
            
            <section id="past">
                <h2>Past Contests</h2>
                
                <div class="column">
                        <div class="contest" style="min-height: 550px;">

                            <div class="front" style="background-image: url(images/com1.jpeg);">
                                <p class="date">2/13-20/18</p>
                                <hr style="height: 20%; border: 0;">
                                <h3>Central #1</h3>
                                <div class="info" onclick="flipBack(this)">More info</div>
                            </div>

                            <div class="back">
                                <span class="turn" onclick="flipFront(this)">&orarr;</span>
                                <h3>Central #1</h3>
                                <ul>
                                    <li><b>Date: </b> February 13 - 20</li>
                                    <li><b>Type: </b> Solo</li>
                                    <li><b>Location: </b> Online</li>
                                    <li><b>Organizer: </b> Central Programming Club</li>
                                </ul>
                                <p class="description">This contest is to serve as practice for the upcomming Canadian Computing Competition held by the CEMC. The format and questions will be modeled after the CCC. Links: <a href="https://dmoj.ca/contest/cpc01j" target="_blank">Junior</a>, <a href="https://dmoj.ca/contest/cpc01s" target="_blank">Senior</a></p>
                                <a href="http://www.cemc.uwaterloo.ca/contests/past_contests.html#ccc" class="block" target="_blank">Sample Problems</a>
                                <a href="https://dmoj.ca/problems/?category=4" class="block" target="_blank">Practice</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column">
                    <div class="contest">

                        <div class="front" style="background-image: url(images/uow.JPG);">
                            <p class="date">2/14/18</p>
                            <hr style="height: 20%; border: 0;">
                            <h3>CCC</h3>
                            <div class="info" onclick="flipBack(this)">More info</div>
                        </div>

                        <div class="back">
                            <span class="turn" onclick="flipFront(this)">&orarr;</span>
                            <h3>CCC</h3>
                            <ul>
                                <li><b>Date: </b> February 14, 2018</li>
                                <li><b>Type: </b> Solo</li>
                                <li><b>Location: </b> Online, in room 117</li>
                                <li><b>Organizer: </b> University of Waterloo</li>
                            </ul>
                            <p class="description">The Canadian Computing Competition (CCC) is run at two levels: junior and senior. It is hosted online through the <a href="http://www.cemc.uwaterloo.ca/index.html" target="_blank">CEMC website</a>, and will be written during class time in room 117. More information about registration will be available closer to the event.</p>
                            <a href="http://www.cemc.uwaterloo.ca/contests/computing.html" class="block" target="_blank">Website</a>
                            <a href="http://www.cemc.uwaterloo.ca/contests/past_contests.html#ccc" class="block" target="_blank">Sample Problems</a>
                        </div>

                    </div>
                </div>
                </div>
                
            </section>
            
            
            <hr style="height: 100px; border: 0;">
            
            
            <section id="contact">
                
                <div id="text">
                    <h2>Know about a contest not listed here?</h2>
                    <hr style="height: 75px; border: 0;">
                    <h2 style="color: #ffaa00;">Let us know</h2>
                </div>
                <hr style="height: 25px; border: 0;">
                
                <div class="form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <h3><span class="required">*</span> Name of contest:</h3>
                        <input type="text" name="name" value="<?php echo $name;?>">
                        <br/><br/>
                        
                        <h3><span class="required">*</span> Contest website:</h3>
                        <input type="url" name="site" value="<?php echo $site;?>">
                        <br/><br/>
                        
                        <input type="submit" value="Submit" id="submit">
                    </form>
                </div>
            </section>
            
            
             <hr style="height: 50px; border: 0;">
            
            
            
<!--FOOTER & TOP BUTTON-->
<?php require_once "templates/footer.php"; ?>    