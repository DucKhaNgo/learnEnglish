<?php 
    function getHeader(){
        ?>
        <div class="header" style="min-height: 900px;">
        <div class="contact1">
            <p>Have any questions? </p>
            <i class="fa fa-phone-square" aria-hidden="true"></i><a href="">+84 1222 000 596</a>
            <i class="fa fa-envelope-square" aria-hidden="true"></i><a href="">Englishturtle@gmail.com</a>
            <p id = "status" style="float:right;color:red;margin-left:500px">
            <?php if (isset($_SESSION['name'])){
                echo "Hello ".$_SESSION['name'];
                echo"<a class='logout' href='/logout.php'><b>Logout</b></a>";
            }?>
            </p>
        </div>
        <div class="menu">
            <a href="/"><p class="name" style="color: #0aa14f"><span>English</span><i style="color:#00000094;">|</i>Turtle</p></a>
            <div class="choice">
                <a href="/">Home</a>
            </div>
            <div class="duongke"></div>
            <div class="choice">
                <a href="about_us.php">About Us</a>
            </div>
            <div class="duongke"></div>
            <div class="choice">
                <a href="Contact.php">Contact</a>
            </div>
            <div class="duongke"></div>
            <div class="choice" onmouseover="showDropDown();" onmouseout="hiddenDropDown()" >
                <span class="learn" >Learn English<i class="arrow down"></i></span>
            </div>
            <div class="learn_menu" onmouseover="showDropDown();" onmouseout="hiddenDropDown();">
                <a href="/LearnVocabulary.php">Learn Vocabulary</a>
                <hr>
                <a href="/LearnGrammar.php">Learn Grammar</a>
                <hr>
                <a href="/LearnListening.php">Learn Listening</a>
                <hr>
            </div>
            <div class="duongke"></div>
            <div class="choice end">
                <?php 
                    if (isset($_SESSION['name'])) echo '<a href="/Myprofile.php"> My Profile </a>';
                    else echo '<a href="/Login"> Login </a>';
                ?>
                
            </div>
        </div>
        <?php
    }

    function getFooter(){
        ?>
            <footer id="footer">
        <div class="Top">
            <div class="row">
                <div class="footer-ribbon">
                    <div class="Social">
                        Be Social
                    </div>
                    <div class="deco"></div>
                </div>
                <div class="row"><!-- Open social div -->
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li class="social-icons-googleplus"><a href="https://plus.google.com/+learnenglishnetwork/posts" target="_blank" rel="publisher" title="Learn English on Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li class="social-icons-skype"><a href="learnenglishonskype.html" title="Learn English on Skype"><i class="fa fa-skype"></i></a></li>
                        <li class="social-icons-facebook"><a href="https://www.facebook.com/LearnEnglishNetwork.LEN" target="_blank" title="Learn English on Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="https://www.twitter.com/LearnEnglishLEN/" target="_blank" title="Learn English on Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-icons-flickr"><a href="https://www.flickr.com/groups/learn_english/" target="_blank" title="Learn English on Flickr"><i class="fa fa-flickr"></i></a></li>
                        <li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCOt0yTQiI8Q_B1lEaG9zntg" target="_blank" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                        <li class="social-icons-pinterest"><a href="https://uk.pinterest.com/lynnehand/learn-english/" target="_blank" title="Learn English on Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    </ul><!-- End social -->
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="col1">
                <a href="//www.learnenglish.de/" class="logo">
                    <img alt="Learn English Free" width="67" height="33" class="img-responsive" src="img/logo-footer.png">
                </a>
            </div>
            <div class="col7">
                <div class="wrap">
                    <div class="para">© Copyright 1999 - 2018 Learn English Network - All Rights Reserved</div>
                    <div class="para"><i class="fa fa-info-circle"></i> These pages are best viewed using the latest version of Chrome, Firefox, or IE.</div>
                </div>
            </div>
            <div class="col4">
                <nav id="sub-menu">
                    <ul>
                        <li><a href="faqspage.html">FAQs</a></li>
                        <li><a href="http://www.learn-english-network.org/">The Learn English Network</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
        <?php
    }
?>