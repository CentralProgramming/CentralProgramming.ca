<!--HEAD & HEADER-->
<?php require_once "templates/header.php"; ?>
            
<!--NAV & ALERT-->
<?php require_once "templates/nav.php"; ?>  
            
            
            
            <div id="back-link">
                <hr style="height: 50px; border: 0;">
                <p><a id="page-from">&laquo; Back to <span id="back-page"></span></a></p>
            </div>
            
            <section id="calendar">
                <h2>Calendar</h2>
                <iframe id="gcal" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=gotvdsb.ca_3ng3kf7rgb3pqqvl42jhlucolk%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FNew_York" scrolling="no"></iframe>     
            </section>
            
             <hr style="height: 50px; border: 0;">
            
            
            <section id="events">
                <h2>Important Dates</h2>
                <hr style="height: 20px; border: 0;">
                
                <div class="event">
                    <h3>First Meeting - 9/20/17 (date to change)</h3>
                    <div class="event-info">
                        <p>The first meeting of Central's Programming Club where we will be introducing the club and coding problems, discussing future meetings, filling out the Google Form, and signing up for DMOJ.</p>
                    </div>
                    <div class="tag"><h4><a># Meetings</a></h4></div>
                </div>
                
                <div class="event">
                    <h3>Canadian Computing Competition - 2/14/18</h3>
                    <div class="event-info">
                        <p>"The Canadian Computing Competition (CCC) is a fun challenge for secondary school students with an interest in programming. It is an opportunity for students to test their ability in designing, understanding and implementing algorithms." &nbsp; &mdash;<a href="http://www.cemc.uwaterloo.ca/contests/computing.html" target="_blank">CEMC</a>.</p>
                    </div>
                    <div class="tag"><h4><a href="contests.php"># Contests</a></h4></div>
                </div>
                
                <div class="event">
                    <h3>ECOO Programming Contest - 4/?/18</h3>
                    <div class="event-info">
                        <p>"The contest takes place in three rounds: 
                            the board-wide contest, the regional contest, and the province-wide contest. A team consists of 4 students and one computer. In order to compete effectively, work must be divided efficiently among the team members." &nbsp; &mdash;<a href="http://ecoocs.org/" target="_blank">ECOO</a>.</p>
                    </div>
                    <div class="tag"><h4><a href="contests.php"># Contests</a></h4></div>
                </div>
            </section>
            
            <hr style="height: 50px; border: 0;">
            
    
            
<!--FOOTER & TOP BUTTON-->
<?php require_once "templates/footer.php"; ?>    