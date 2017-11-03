<!--HEAD & HEADER-->
<?php require_once "templates/header.php"; ?>
            
<!--NAV & ALERT-->
<?php require_once "templates/nav.php"; ?>  

            
            <!--INTRO SECTION-->
            <section id="intro">
                <hr style="height: 25px; border: 0;">
                
                <!--WELCOME SECTION-->
                <div id="introbox">
                    <h2 id="welcome">Welcome to CPC</h2>
                    <h3>"Connecting Central Coders"</h3>
                    <hr style="height: 40px; border: 0;">
                    
                    <!--WELCOME TEXT-->
                    <div id="introtext">
                        <ul>
                            <li>Meeting first Friday of every month
                                <ul id="sub">
                                    <li>&#9642; Workshops</li>
                                    <li>&#9642; Discussions</li>
                                    <li>&#9642; Projects</li>
                                </ul>
                            </li>
                            <li>Available for practice, homework help, and workspace every Friday</li>
                            <li>Meetings will start at 11:15 
                                <ul>
                                    <li>Please eat your lunch prior to the meeting</li>
                                    <li>Food is not allowed in room 117</li>
                                </ul>
                            </li>
                            <li>Prior programming experience not required to join</li>
                        </ul>
                    </div>
                </div>

                <hr id="announcements" style="height: 100px; border: 0;">
                
                <!--ANNOUNCEMENTS SECTION-->
                <h2 id="news"></h2>
                <hr style="height: 15px; border: 0;">
                    <div class="rounded">
                        
                        <!--ANOUNCEMENTS-->
                        <div id="rounded-content">
                            <h3>November 3</h3>
                            <ul>
                                <li><p>Learn to draw graphics with code using Python's turtle module</p></li>
                                <li><p>We will be working on <a href="https://repl.it" target="_blank">RepLit</a></p>
                                    <ul>
                                        <li><p>You can access our classroom <a href="https://repl.it/community/classrooms/35322" target="_blank">here</a></p></li>
                                    </ul>
                                </li>
                                <li><p>Follow along our explainations or work at your own pace</p></li>
                                <li><p>We will also be discussing our upcoming contest</p></li>
                            </ul>
                            <br/>
                            
                            <h3>October 13 & 20</h3>
                            <ul>
                                <li><p>Beginners introduction to code</p>
                                    <ul>
                                        <li><p>Learn on your own and ask questions, or listen to our explainations</p></li>
                                        <li><p>Lesson will cover basic concepts that can be applied to any language</p></li>
                                    </ul>
                                </li>
                            </ul>
                            <br/>
                                    
                            <h3>October 6</h3>
                            <ul>
                                <li><p><a href="https://play.kahoot.it/#/?quizId=4e22a881-3546-409f-8fe2-62b7d5727aff&gameMode=ghost&startTime=1507303453555&hostId=17c45c2c-c8f1-49b6-a5c2-f6744457c624" target="_blank">Kahoot</a> and recursion example</p></li>
                                <li><p>Meeting will start at 11:15</p></li>
                                <li><p>Please eat your lunch before the meeting starts </p>
                                    <ul>
                                        <li><p>Food is not allowed in room 117</p></li>
                                    </ul>
                                </li>
                            </ul>
                            <br/>
                            
                            <h3>September 22</h3>
                            <ul>
                                <li><p>First meeting</p>
                                    <ul>
                                        <li><p>Introducing the club and coding problems</p></li>
                                        <li><p>Discussing future meetings</p></li>
                                        <li><p>Filling out the <a href="https://goo.gl/forms/qHRZu7HGEt1hHn292" target="_blank">Google Form</a></p></li>
                                        <li><p>Signing  up for <a href="https://dmoj.ca/" target="_blank">DMOJ</a></p></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <p><a id="cal" href="calendar.php#from_news">View full calendar</a></p>
                    </div>
            </section>
            
            <hr id="about_sec" style="height: 150px; border: 0;">

            
            <!--CLUB INFO SECTION-->
            <section id="club-info">
                
                <!--IMAGE-->
                <div id="info-img">
                    
                    <!--ABOUT IMAGE-->
                    <div id="about-img"></div>
                
                    <!--LEARN TO CODE IMAGE-->
                    <div class="hide" id="learn-img"></div>
                </div>
                

                <!--TEXT-->
                <div id="info-text">
                    
                    <span id="info_top"></span>
                    <hr style="height: 50px; border: 0;">
                
                <!--ABOUT TEXT-->
                    <div id="about-text">
                        <h2>About the CPC</h2>
                        <p>New in 2017, Central's Programming Club was founded by four students in the wake of the ECOO group programming contest. After moving on to the second round (but not further), they noted the distinct lack of practice that lead to their defeat. In an attempt to remedy this, Central Programming Club was born.</p>

                        <p>With a focus on more than just coding problems, the CPC hopes to bring together people with a passion for problem solving or code. Our goal is to go beyond what we learn in class to create something meaningful, whether that means preparing for a contest, applying skills to make an app or game, or simply learning more about programming.</p>

                        <p>No prior coding experience is required to join! We can point you towards resources to help you learn, and we're always available to answer any questions you may have. We strive to provide resources&mdash;including homework help&mdash;in order to assist everyone in reaching their goals.</p>

                        <p><a href="#info_top" class="info-change" onclick="changeAbout(1)">Why learn programming?</a></p>
                    </div>


                    <!--LEARN TO CODE TEXT-->
                    <div class="hide" id="learn-text">
                        <h2>Why Learn to Code?</h2>
                        <p>Programming gives you the ability to translate your ideas into reality and create something you can be proud of. Whether you want to design the next big app or game, make a useful piece of software, create a stunning website, or change the world, the power of programming allows you to accomplish your dreams. The possibilities are endless.</p>

                        <p>Anyone can learn code. You don’t need to be a math genius or a science whiz. Creative thinking and problem solving skills are the key to coding success. Programming exercises and strengthens these skills (along with critical and alternative thinking) which can then be applied in a multitude of disciples. Not interested in pursuing computer science? Learning to code can still help you gain transferable skills that are useful no matter what your future may hold. Plus, it's a lot of fun, too! <p/>

                        <p>Programming isn't difficult to learn; with a little time and patience, anyone can code, and make something worthwhile.</p>

                        <p><a href="#info_top" class="info-change" onclick="changeAbout(0)">About the CPC</a></p>
                    </div>
                </div>
                
            </section>

            <hr id="team_sec" style="height: 125px; border: 0;">
            
            
            
            <!--TEAM SECTION-->
            <section id="team">
                <h2>Team</h2>
                <hr style="height: 50px; border: 0;">
                    
                    <div class="row">
                        
                        <!--AMY-->
                        <div class="column">
                            <!--AMY TEXT-->
                            <h3><b>Amy</b></h3>
                            <p class="title">Co-President</p>
                            <p class="description">To Amy, programming is all about creating something out of nothing. With a few lines of code and the desire to discover and explore, she finds herself solving questions that are otherwise impossible. Amy loves to challenge herself with computer contests that push her thinking to the next level.</p>
                            <p class="email"><a href="mailto:amy@centralprogramming.ca">amy@centralprogramming.ca</a></p>
                            <a class="contact" href="contact.php?check=amy">Contact</a>
                        </div>

                        <!--ANGELA-->
                        <div class="column">
                            <!--ANGELA TEXT-->
                            <h3><b>Angela</b></h3>
                            <p class="title">Co-President</p>
                            <p class="description">What first prompted Angela’s interest in programming was the goal of achieving a greater understanding of IT. At first she was a little overwhelmed, but later found that programming is not too complicated, and it's fun as it involves problem solving skills. Angela hopes to pursue engineering in the future.</p>
                            <p class="email"><a href="mailto:angela@centralprogramming.ca">angela@centralprogramming.ca</a></p>
                            <a class="contact" href="contact.php?check=angela">Contact</a>
                        </div>

                        <!--ASHLEY-->
                        <div class="column">
                            <!--ASHLEY TEXT-->
                            <h3><b>Ashley</b></h3>
                            <p class="title">Co-President</p>
                            <div class="desc-container"></div>
                            <p class="description">Ashley’s favourite and least favourite part of programming is spending hours trying to figure out why it isn’t working (only for it to be a typo). The satisfaction of finally solving a difficult problem is one of the reasons she enjoys contests so much. Ashley’s main interest is in software and game design.
                            </p>
                            <p class="email"><a href="mailto:ashley@centralprogramming.ca">ashley@centralprogramming.ca</a></p>
                            <a class="contact" href="contact.php?check=ashley">Contact</a>
                        </div>
                        
                        <!--FAY-->
                        <div class="column">
                            <!--FAY TEXT-->
                            <h3><b>Fay</b></h3>
                            <p class="title">Co-President</p>
                            <p class="description">What first brought Fay into programming was her desire to figure out what codes mean. It turned out that they aren't as complicated as they seem, and are everywhere in our lives, so she kept learning. Fay wishes to continue pursuing programming as her hobby and skill in the future.
                            </p>
                            <p class="email"><a href="mailto:fay@centralprogramming.ca">fay@centralprogramming.ca</a></p>
                            <a class="contact" href="contact.php?check=fay">Contact</a>
                        </div>

                        <!--MS. WARD-->
                        <div class="column">
                            <!--MS. WARD TEXT-->
                            <h3><b>Ms. Ward</b></h3>
                            <p class="title">Teacher Supervisor</p>
                            <p class="description">We haven't gotten Ms. Ward to write anything about herself yet. Sorry about that.</p>
                            <!--<p class="email">email@example.com</p>
                            <a class="contact" href="mailto:email@example.com">Contact</a>-->
                        </div>

                        <!--YOU-->
                        <div class="column">
                            <!--YOU TEXT-->
                            <h3><b>You!</b></h3>
                            <p class="title">Valued Member</p>
                            <p class="description">Our club thrives on people just like you with a passion of programming, a desire to create something meaningful, or a thirst to learn more (unless that's not why you're on this website, in which case, thank you for visiting anyways). Without you, this club would not be a reality.</p>
                        </div>
                    </div>
                <hr style="height: 50px; border: 0;">
            </section>
    

            
<!--FOOTER & TOP BUTTON-->
<?php require_once "templates/footer.php"; ?>    