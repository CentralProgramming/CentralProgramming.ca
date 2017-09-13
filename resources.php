<!--HEAD & HEADER-->
<?php require_once "templates/header.php"; ?>
            
<!--NAV & ALERT-->
<?php require_once "templates/nav.php"; ?>  


            
        
            <!--COMING SOON-->
            <section id="soon">
                <img id="soon" src="images/coming-soon.png">
                <h3>We're hard at work writing and gathering resources.<br/>
                In the mean time, if you'd like to submit any, it would really help us out!<br/> 
                <a href="mailto:contact@centralprogramming.ca">Send us an email.</a></h3>
            </section>
            
            
            
            <!--<h2 id="res-title">Resources</h2>
            
            SIDE NAVBAR
            <section id="sidenav">
                <button class="accordion" id="input" onclick="openCtgy(this)"><h3>Input</h3></button>
                <div class="panel">
                    <button class="expanded" onclick="openSection(event, 'inputIntro')"><h4 style="font-weight: bold;">Introduction</h4></button>
                    <button class="expanded" onclick="openSection(event, 'scanner')"><h4>Scanner</h4></button>
                    <button class="expanded" onclick="openSection(event, 'stream')"><h4>Input Stream</h4></button>
                    <button class="expanded" onclick="openSection(event, 'reader')"><h4>Buffered Reader</h4></button>
                </div>
                
                <button class="accordion" id="arrays" onclick="openCtgy(this)"><h3>Arrays</h3></button>
                <div class="panel">
                    <button class="expanded" onclick="openSection(event, 'cgryIntro')"><h4 style="font-weight: bold;">Introduction</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec1')"><h4>Section 1</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec2')"><h4>Section 2</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec3')"><h4>Section 3</h4></button>
                </div>
                
                <div id="instruct">
                    <h3>Please select a category</h3>
                </div>
                
                <button class="accordion" id="arrayLists" onclick="openCtgy(this)"><h3>Array Lists</h3></button>
                <div class="panel">
                    <button class="expanded" onclick="openSection(event, 'cgryIntro')"><h4 style="font-weight: bold;">Introduction</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec1')"><h4>Section 1</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec2')"><h4>Section 2</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec3')"><h4>Section 3</h4></button>
                </div>
                
                <button class="accordion" id="recursion" onclick="openCtgy(this)"><h3>Recursion</h3></button>
                <div class="panel">
                    <button class="expanded" onclick="openSection(event, 'cgryIntro')"><h4 style="font-weight: bold;">Introduction</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec1')"><h4>Section 1</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec2')"><h4>Section 2</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec3')"><h4>Section 3</h4></button>
                </div>
                
                <button class="accordion" onclick="openCtgy(this)"><h3>Category</h3></button>
                <div class="panel">
                    <button class="expanded" onclick="openSection(event, 'cgryIntro')"><h4 style="font-weight: bold;">Introduction</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec1')"><h4>Section 1</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec2')"><h4>Section 2</h4></button>
                    <button class="expanded" onclick="openSection(event, 'sec3')"><h4>Section 3</h4></button>
                </div>
            </section>
            
            
            
            
            <!--CONTENT
            <section id="info">
                
                <!--INTRO CONTENT
                <div id="intro">
                    <h2>Java Resources</h2><br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor magna quis risus iaculis, sed mollis mi consectetur. Cras et tortor ut lacus blandit gravida. Praesent eu sodales nulla. Praesent aliquam fringilla dignissim. Suspendisse euismod, massa at rutrum tempor, nibh tellus efficitur nisl, id porta lectus ligula ac felis. Proin pretium, ex sit amet dapibus malesuada, ante est eleifend erat, vehicula tincidunt diam ex at odio.</p>
                </div>
            
            
                <!--INPUT CONTENT
                <div id="inputIntro" class="content">
                    <h2>Introduction to Input</h2>
                </div>

                <div id="scanner" class="content">
                    <h2>Scanner</h2><br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac nisi vel nisi semper imperdiet auctor in nisl. Ut vel dolor felis. Quisque lobortis quam aliquam, commodo mi non, ullamcorper tortor. Proin tincidunt vehicula ipsum, nec ullamcorper sem aliquam a. Nunc venenatis, ante eget mollis pharetra, tellus magna rutrum massa, eget ultricies quam metus in leo. Vestibulum eu justo id quam porttitor interdum. Praesent dictum, quam in dapibus venenatis, elit metus aliquet nulla, ac iaculis dolor est ac justo. Curabitur quam mauris, dignissim et pulvinar at, scelerisque rhoncus arcu. Aliquam a massa sed justo tristique viverra nec sit amet est. Ut consequat eget orci in gravida. Curabitur at turpis tristique risus cursus tempus. Praesent sit amet lectus at est auctor maximus. Sed sapien odio, pulvinar vitae quam nec, pulvinar pulvinar dui.</p>

                    <p>Vestibulum et laoreet massa. Aliquam aliquam erat massa, ac egestas massa efficitur ac. Nulla facilisi. Sed urna nibh, congue suscipit dignissim in, vestibulum sit amet tortor. Donec lobortis odio mi, non aliquet est convallis et. Etiam aliquet mattis posuere. Ut ultrices, quam ac suscipit luctus, urna nibh porta velit, a convallis nisi sem in tellus. Phasellus vitae purus at tellus laoreet sollicitudin ut ut velit. Cras placerat pharetra porttitor. Nam vel dui at sem pharetra aliquam tempus eu orci. Fusce ut sagittis turpis.</p>

                    <p>Suspendisse libero ligula, lobortis quis pretium ac, tempus nec metus. Suspendisse velit enim, interdum ut tortor non, tempor vestibulum velit. Proin in mauris semper, luctus ante id, mattis nulla. Phasellus quis libero et metus egestas pharetra. Praesent ullamcorper tristique augue, eu aliquet odio ornare id. Sed vitae viverra lacus. Ut eu lobortis diam. Phasellus maximus turpis vehicula, elementum ligula in, scelerisque diam.</p>

                    <p>Suspendisse non leo mi. Fusce at porta eros. Aenean ultrices, lacus maximus rutrum ultricies, nulla sem finibus lorem, in faucibus justo sapien non purus. Aenean augue ligula, hendrerit vel dui eget, aliquam ornare augue. Praesent eleifend dapibus tellus. Etiam vestibulum consequat orci, sed dictum urna bibendum vitae. Phasellus nec vestibulum lorem. Sed elementum lectus vel iaculis malesuada. Aliquam suscipit efficitur sapien, nec lobortis orci venenatis at. Nulla nec est ac erat scelerisque facilisis. Duis quis nibh lobortis, ullamcorper orci id, commodo est.</p>

                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla vel scelerisque elit. Phasellus finibus ultricies eros, sit amet malesuada arcu tincidunt non. In nulla odio, volutpat at dolor sed, egestas blandit nunc. Phasellus interdum nec sem nec convallis. Mauris dapibus nisi a arcu eleifend, a tempor dolor tempus. Sed scelerisque nunc in tincidunt semper. Morbi id elit at velit placerat mollis eget a nisi. Morbi tellus nisl, auctor ut eros a, ornare ullamcorper diam. Nulla venenatis erat quis odio efficitur condimentum ac in enim. Nulla non gravida felis.</p>
                </div>

                <div id="stream" class="content">
                    <h2>Input Stream</h2>
                </div>

                <div id="reader" class="content">
                    <h2>Buffered Reader</h2>
                </div>


                <!--INTROS [PLACEHOLDER]
                <div id="arrayIntro" class="content">
                    <h2>Introduction to Arrays</h2>
                </div>
                <div id="arrayListsIntro" class="content">
                    <h2>Introduction to Array Lists</h2>
                </div>
                <div id="recursionIntro" class="content">
                    <h2>Introduction to Recursion</h2>
                </div>
                
                <!--PLACEHOLDER CONTENT
                <div id="cgryIntro" class="content">
                    <h2>Introduction</h2>
                </div>
                <div id="sec1" class="content">
                    <h2>Section 1</h2><br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor magna quis risus iaculis, sed mollis mi consectetur. Cras et tortor ut lacus blandit gravida. Praesent eu sodales nulla. Praesent aliquam fringilla dignissim.</p>
                </div>
                <div id="sec2" class="content">
                    <h2>Section 2</h2><br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor magna quis risus iaculis, sed mollis mi consectetur. Cras et tortor ut lacus blandit gravida. Praesent eu sodales nulla. Praesent aliquam fringilla dignissim.</p>
                </div>
                <div id="sec3" class="content">
                    <h2>Section 3</h2><br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor magna quis risus iaculis, sed mollis mi consectetur. Cras et tortor ut lacus blandit gravida. Praesent eu sodales nulla. Praesent aliquam fringilla dignissim.</p>
                </div>
            </section>

            
            <hr style="height: 50px; border: 0; clear: both;">
            -->
            
    
            
<!--FOOTER & TOP BUTTON-->
<?php require_once "templates/footer.php"; ?>    