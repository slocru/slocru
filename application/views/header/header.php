<?php
$this->load->helper('html');
$this->load->helper('url');
?>
<html>
    <head>
        <!-- Start Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-93441402-1', 'auto');
            ga('require', 'linkid');
            ga('send', 'pageview');

        </script>
        <!-- End Google Analytics -->
        <title>Cru Central Coast</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../../../assets/img/logo2.png">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../assets/js/header.js"></script>
        <!-- Bootstrap -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'/>
        <link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen"/>
        <link href="../assets/css/nivo-slider.css" rel="stylesheet" media="screen"/>
        <link href="../assets/themes/light/light.css" rel="stylesheet" media="screen"/>
        <link href="../assets/css/font-awesome.css" rel="stylesheet" media="screen"/>
        <!-- Page Formatting -->
        <link href="../assets/css/header.css" rel="stylesheet" type="text/css">
        <!-- Loads the CSS for the specific page -->
        <?php echo '<link href="../assets/css/' . (basename($_SERVER['REQUEST_URI']) == '' ? 'home' : basename($_SERVER['REQUEST_URI'])) . '.css" rel="stylesheet" type="text/css">'; ?>
        <link href="../assets/css/footer.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div id="header" role="navigation">
                <div class="container">
                    <a href="home">
                        <img src="../assets/img/crulogo.png" class="logo"/>
                    </a>
                    <!-- Snapchat link goes here -->
                    <a href="https://www.youtube.com/user/slocrusade" target="_blank">
                        <img src="../assets/img/youtube.png" class="social-youtube" id="youtube"/>
                    </a>
                    <a href="https://twitter.com/CruCalPolySLO" target="_blank">
                        <img src="../assets/img/twitter.png" class="social" id="twitter"/>
                    </a>
                    <a href="https://www.instagram.com/crucalpolyslo/" target="_blank">
                        <img src="../assets/img/instagram.png" class="social" id="instagram"/>
                    </a>
                    <a href="https://www.facebook.com/CruCalPolySLO/" target="_blank">
                        <img src="../assets/img/facebook.png" class="social" id="facebook"/>
                    </a>
                    <a href="https://crucentralcoast.com">
                        <img data-alt-src="../assets/img/back-crucentral_full-blue.png" src="../assets/img/back-crucentral_full.png" class="central" id="to-landing"/>
                    </a>
                </div>
                
                <i class="fa fa-bars"></i>

                <div class="container">
                    <ul class="menu">
                        <li class="menu-about state2">
                            <a href="about" class="menu-items mabout"> ABOUT </a>
                        </li>
                        <li class="menu-involvement state2">
                            <a href="involvement" class="menu-items minvolvement"> GET INVOLVED </a>
                        </li>
                        <li class="menu-resources state2">
                            <a href="resources" class="menu-items mresources"> RESOURCES </a>
                        </li>
                        <li class="menu-media state2">
                            <a href="construction" class="menu-items mmedia">MEDIA</a>
                            <!--<a href="media" class="menu-items mmedia"> MEDIA </a>-->
                        </li>
                    </ul>
                </div>
                <div class="container buffer">
                    <div class="subcatagories hidden">
                        <div id="about-links" class="subs hidden">
                            <p class="subs">
                                <a href="staff" class="subs">STAFF</a>
                                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                                <a href="https://give.cru.org/2281756" class="subs" target="_blank">GIVE</a>
                                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                                <a href="history" class="subs">HISTORY</a>
                            </p>
                        </div>
                        <div id="involvement-links" class="subs hidden">
                            <p class="subs">
                                <a href="http://goo.gl/forms/3oIMUCulUt" class="subs">COMMUNITY GROUPS</a>
                                <!--<a href="studies" class="subs">COMMUNITY GROUPS</a>-->
                                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                                <a href="ministry" class="subs">MINISTRY TEAMS</a>
                                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp; 
                                <a href="events" class="subs">EVENTS</a>
                                <!--<a href="events" class="subs">EVENTS</a>-->
                                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                                <a href="http://crucentralcoast.com" class="subs">ALL MINISTRIES</a>
                                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;   
                                <a href="missions" class="subs">SUMMER MISSIONS & STINT</a>
                            </p>
                        </div>
                        <div id="resources-links" class="subs hidden">
                            <p class="subs">
                                <a href="construction" class="subs">SERMONS</a>
                                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp; 
                                <a href="http://crucentralcoasthousing.lefora.com/" class="subs">HOUSING</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>