<?php session_start(); ?>
<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Sindri</title>
        <meta name="description" content="Sindri Freyr Guðjónsson, accoustic artist">
        <meta http-equiv="content-language" content="en" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Twitter Card data -->
        <meta name="twitter:card" value="summary">

        <!-- Open Graph data -->
        <meta property="og:title" content="Sindri Freyr Guðjónsson" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.sindrifreyr.is/" />
        <meta property="og:image" content="http://example.com/images/avatar.jpg" />
        <meta property="og:description" content="Description Here" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        

        

        <link rel="stylesheet" href="styles/main.css">

        <link href='http://fonts.googleapis.com/css?family=Gruppo|Roboto' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <script src="scripts/vendor/modernizr.js"></script>

        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body id="/home" >
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Main navigation bar -->
        <nav class="navbar navbar--main navbar-fixed-top">
            <div class="navbar--container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#/home">
                        Sindri Freyr
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="top-navbar">
                    <ul class="nav navbar-nav navbar-right" id="main-navbar" role="tablist">

                        <li class="active"> 
                            <a href="#/home" aria-controls="Home">Home</a>
                        </li>

                        <li>
                            <a href="#/listen" aria-controls="Listen">Listen</a>
                        </li>
    
                        <li> 
                            <a href="#/bio" aria-controls="Bio">Bio</a>
                        </li>

                        <li> 
                            <a href="#/contact" aria-controls="Contact">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="jumbotron" id="jumbotron"
            data-center="background-position: 50% 0px;"
            data-top-bottom="background-position: 50% -100px;"
            data-anchor-target="#jumbotron"
        >
          
        </section>
        
        <div class="container">
            
            <div class="featured-video">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3KRnOC-gL9s" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Social icons -->
            <section class="social-icons" data-spy="affix" data-offset-top="170" data-offset-bottom="">

                <a href="https://www.facebook.com/SindriFreyrGudjons" class="icon facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="fa fa-facebook"></i>
                </a>

                <a href="https://instagram.com/sindrifreyr/" class="icon instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
                    <i class="fa fa-instagram"></i>
                </a>

                <a href="https://www.youtube.com/user/SindriFreyrGudjons" class="icon youtube" data-toggle="tooltip" data-placement="top" title="Youtube">
                    <i class="fa fa-youtube"></i>
                </a>

                <a href="https://twitter.com/sindrifg" class="icon twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                    <i class="fa fa-twitter"></i>
                </a>

                <a href="https://soundcloud.com/sindrifreyr" class="icon soundcloud" data-toggle="tooltip" data-placement="top" title="SoundCloud">
                    <i class="fa fa-soundcloud"></i>
                </a>

            </section>

            <section class="bio" id="/bio">

                <h2 class="section--title">Bio</h2>

                <div class="bio--avatar">
                    <div class="overlay"></div>
                    <img src="images/avatar.jpg" alt="avatar">
                </div>
                
                <div class="bio--content">
                    <p>Sindri Freyr is a 20 years old musician from Westman-Islands (Vestmannaeyjar), a small Island southwest of the coast of Iceland.</p>
                    <p>Sindri Freyr has been in music since he can remember and he started showing interest in playing the guitar around 10 years old. He’s been playing the guitar ever since and is mostly self taught.</p>
                    <p>The summer of 2013 he released his first single, a song called Together you and me. </p>
                    <p>Sindri Freyr is quiet happy about the poplicity he got with his first single.</p>
                    <p>His second single didn’t follow until the summer 2015 and that song he wrote in Icelandic and is called Þér við hlið. </p>
                    <p>There´s a lot going on in Sindri Freyr´s music life! So you should get up and follow him threw his social media pages like, <a href="https://www.facebook.com/SindriFreyrGudjons">Facebook</a>, <a href="https://twitter.com/sindrifg">Twitter</a>, <a href="https://instagram.com/sindrifreyr/">Instagram</a> and <a href="https://www.youtube.com/user/SindriFreyrGudjons">YouTube</a>.</p>
                </div>
            </section>

            <section class="listen" id="/listen">

                <h2 class="section--title">Listen</h2>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" scrolling="yes" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/100462371&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                </div>
            </section>

            <section class="contact" id="/contact">
                
                <h2 class="section--title">Contact Me</h2>

                <?php if (!empty($_SESSION['errors'])): ?>
                  <div class="alert alert-danger" role="alert">
                    <?php foreach ($_SESSION['errors'] as $key => $value): ?>
                        <p><?= $value ?></p>
                    <?php endforeach; session_unset(); ?>
                  </div>  
                <?php endif ?>

                <form class="contact--form" action="send.php" method="POST">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="senderemail">Your Email address</label>
                        <input type="email" class="form-control" id="senderemail" name="senderemail" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" required></textarea>
                    </div>

                    <div class="g-recaptcha form-group" data-sitekey="6LdQNgYTAAAAALVq4SKx0dGYyNHYPm8pngVe28f1"></div>

                    <input type="submit" value="Send" name="send" class="form-control">
                </form>

            </section>
        </div>

        <footer>
            <p class="text-center">&copy;2015 Sindri Freyr Guðjónsson</p>
        </footer>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

        <script type="text/javascript" src="skrollr.min.js"></script>

        <script src="scripts/vendor.js"></script>

        <script src="scripts/plugins.js"></script>

        <script src="scripts/main.js"></script>
    </body>
</html>
