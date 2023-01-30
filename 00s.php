<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The 2000s</title>
    <?php include( 'php/include-head.php' ); ?>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser.
        Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Include the header -->
    <?php include( 'php/include-nav.php' ); ?>

    <script type="text/javascript">
        //Set header and current year
        $('.nav li').eq(3).attr('id', 'current');
    </script>

    <!-- Set Color Scheme-->
    <style type="text/css">
    .color-b { background-color: rgb(142, 78, 112); }
    .color-c { color: rgb(142, 78, 112); }
    ul.nav li { transition: .75s ease-out; }
    ul.nav li a { border: 5px solid rgb(142, 78, 112); }
    li#current a { color: rgb(142, 78, 112); }
    li#current span { color: rgb(142, 78, 112); }
    </style>

    <!-- ====================================
            YELLOW BLEED
    ======================================-->
    <div class="row yellow">
        <div class="gdcenter">
            <h2 class="color-c">The 1980s</h2>

            <h3 class="color-c">The new millenium brought change in all areas of society.  A terrible event 
                like 9/11 has rippling effects throughout all areas of society.  Changes in the availibility 
                of technology and the emergence of personal computers brought about lasting changes in stand up.
            </h3>
        </div>
    </div>

    <!-- ====================================
            MAIN CONTENT
    ======================================-->
    <div class="row">
        <div class="gdcenter">
            <div class="col12 first">
                <div class="col7">
                    <h1>Resurgence</h1>

                    <div class="col6">

                <h3 class="color-c">Though it had fallen out of favor in the early 1990s, stand-up comedy was back on an upswing by
                the end of the decade.
                </h3>

                <div class="col5">
                    <p>By 2000, stand-up was back on top. "Packaged" stand-up tours like The 
                    Original Kings of Comedy (featuring, among others, the late Bernie Mac) began selling out theaters 
                    and playing to packed houses, going on to become the most successful comedy tour of all time 
                    (and eventually becoming a documentary/concert film directed by Spike Lee). Chris Rock continued 
                    to build upon the success he found in the late '90s, transforming himself into one of the biggest
                    and best stand-ups of all time. Comedy clubs and improvisational theater troupes (like Second City)
                    began to resurface on from coast to coast. Comedy was cool again.
                    </p>

                    <p>The “Blue Collar Comedy Tour” was another extremely successful project. Featuring the stylings
                    of Jeff Foxworthy, Bill Dunham, and Larry The Cable Guy, The Blue Collar comedy tour was very
                    much a commentary on American and redneck culture. It catered to America at a time when we
                    were feeling quite low. Blue Collar’s self-depricating and relatable humor allowed us to lighten
                    up and laugh at ourselves.
                    </p>
                </div>
            </div>
                </div>


            <div class="col4 last">
                <img src="img/blue-collar.jpg">
                <br><br>
                <img src="img/original-kings.jpg">

                <p class="f-caption">
                Two of the most succesful comedy tours of the new millenium, "Blue Collar Comedy" and "The Original Kings of Comedy" brought stand-up comedy back into play after the 90s bust.
                </p>
            </div>

        </div>

            <div class="col12">
                <h1>Computer, Meet Comedy.</h1>

            <div class="col6">
                <h3 class="color-c">At the dawn of the 21st century, the technological
                breakthrough of the personal computer and the internet
                was affecting every area of society. Everyone was
                connected and sharing ideas more quickly than ever.
                Word could spread fast and you could communicate more
                efficiently than ever.
                </h3>

                <div class="col5">
                    <p>Computers contributed to the availability and accessibility of stand-ups. Sites like Youtube,
                    Myspace and Facebook connected fans of comedians in previously unheard of ways.
                    Perhaps no other comedian feels as indicitive of 2000’s stand-up comedy as Dane Cook does.
                    Using Myspace, Dane amassed a legion of followers around his stand up act. During his time, He was the biggest name in standup,
                    selling out huge venues and commanding legions of comedy fans.  
                    </p>
                </div> 
            </div>

            <div class="col6 last">
                <img src="img/dane-cook.jpg">
                <div class="comic-tab-wrap">
                <br><br>
                <a class="comic-tab color-b" id="Dane Cook" data-featherlight="#dane-cook-box">
                    <div class="mic-wrap"><img src="img/microphone.png"></div>

                    <div class="tab-text">
                        <p>learn more about</p>
                        <h3>Dane Cook</h3>
                    </div>
                </a> 
            </div>  
            </div>
        </div>

        </div>  <!-- Close GDCENTER -->

    </div>  <!-- Close Row -->

    <div class="footer">
        <a href="10s.php">
            <img class="full-bleed" src="img/dave-chappelle.jpg">
            <div>
                <h1 class="white">continue to the <span class="color-c">2010s</span></h1>
            </div>
        </a>
    </div>

    <!-- LIGHTBOXES -->
<!-- =================================
        Lightboxes 
     =================================-->
<div class="all-lightboxes">
</div>

<?php include( 'php/include-foot.php' ); ?>

</body>
</html>
