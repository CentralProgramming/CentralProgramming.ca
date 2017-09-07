<!--HEAD & HEADER-->
<?php require_once "templates/header.php"; ?>
            
<!--NAV & ALERT-->
<?php require_once "templates/nav.php"; ?>       
            
            
<!--FORM SCRIPT-->
<?php require_once "scripts/contactscript.php"; ?>



            <!--ERRORS-->
            <?php
                foreach($errors as $x => $alert){
                    if($alert!=""){
                        echo "<div class='alert'><h3>Error: " . $alert . "</h3></div>";
                    }
                }
                if($messageSent == true){
                    echo "<div class='alert' id='success'><h3>Your message has been sent. Thank you for your feedback.</h3></div>";
                }    
            ?>
            
            <hr style="height: 20px; border: 0;">
            
            
            <section id="contact">
                <h2>
                    <?php 
                        if($type == "site"){
                            echo "Report an Error";
                        }
                        else if($check == "amy"){
                            echo "Talk to Amy";
                        }
                        else if($check == "angela"){
                            echo "Talk to Angela";
                        }
                        else if($check == "ashley"){
                            echo "Talk to Ashley";
                        }
                        else if($check == "fay"){
                            echo "Talk to Fay";
                        }
                        else{
                            echo "Get in Touch";
                        }
                    ?>
                </h2>
                <div id="form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        
                        <h3>Name <span class="required">*</span></h3>
                        <input type="text" name="name" value="<?php echo $name;?>"><br/>
                        <br/>

                        
                        <h3>
                            <div class="question"><span style="cursor: pointer;">Send to:</span>
                                <div class="answer">For questions/concerns regarding the website, please send to Ashley. If the question is general, send to all.</div>
                            </div> 
                            
                            <span class="required">*</span></h3>
                        <div id="recipients">
                            <div class="person" id="Amy">
                                <label class="toggle" for="toggle-01">
                                    <input type="checkbox" name="sendTo[]" value="email1@example.com" id="toggle-01" 
                                           <?php 
                                               if($check == "amy"){
                                                   echo "checked";
                                               }
                                               else if (is_array($recip) || is_object($recip)){
                                                    foreach($recip as $reciever){
                                                        if($reciever == "email1@example.com"){
                                                            echo "checked";
                                                        }
                                                    }
                                                }
                                           ?>>
                                    <span class="check"></span>
                                </label>
                                <p>Amy</p>
                            </div>
                            
                            <div class="person" id="Angela">
                                <label class="toggle" for="toggle-02">
                                    <input type="checkbox" name="sendTo[]" value="email2@example.com" id="toggle-02" 
                                           <?php 
                                               if($check == "angela"){
                                                   echo "checked";
                                               }
                                               else if (is_array($recip) || is_object($recip)){
                                                    foreach($recip as $reciever){
                                                        if($reciever == "email2@example.com"){
                                                            echo "checked";
                                                        }
                                                    }
                                                }
                                           ?>>
                                    <span class="check"></span>
                                </label>
                                <p>Angela</p>
                            </div>
                            
                            <div class="person" id="Ashley">
                                <label class="toggle" for="toggle-03">
                                    <input type="checkbox" name="sendTo[]" value="email3@example.com" id="toggle-03" 
                                           <?php 
                                               if($type == "site"){
                                                   echo "checked";
                                               } 
                                               else if($check == "ashley"){
                                                       echo "checked";
                                               }
                                               else if (is_array($recip) || is_object($recip)){
                                                    foreach($recip as $reciever){
                                                        if($reciever == "email3@example.com"){
                                                            echo "checked";
                                                        }
                                                    }
                                                }
                                           ?>>
                                    <span class="check"></span>
                                </label>
                                <p>Ashley</p>
                            </div>
                            
                            <div class="person" id="Fay">
                                <label class="toggle" for="toggle-04">
                                    <input type="checkbox" name="sendTo[]" value="email4@example.com" id="toggle-04" 
                                           <?php 
                                               if($check == "fay"){
                                                   echo "checked";
                                               }
                                               else if (is_array($recip) || is_object($recip)){
                                                    foreach($recip as $reciever){
                                                        if($reciever == "email4@example.com"){
                                                            echo "checked";
                                                        }
                                                    }
                                                }
                                           ?>>
                                    <span class="check"></span>
                                </label>
                                <p>Fay</p>
                            </div>
                        </div>
                        <br/>
                        
                        
                        <h3>Email (if response needed)</h3>
                        <input type="email" name="email" value="<?php echo $email;?>">
                        <br/><br/>

                        
                        <h3>Comment <span class="required">*</span></h3>
                        <textarea name="comment" style="width: 100%; height: 200px; resize: vertical; border: 3px inset;"><?php echo $comment;?></textarea><br/>
                        <span class="error"></span>
                        <br/><br/>

                        <input type="submit" value="Submit" id="submit">
                    </form>
                </div>
            </section>
            
            <hr style="height: 20px; border: 0;">
            

            
<!--FOOTER & TOP BUTTON-->
<?php require_once "templates/footer.php"; ?>    