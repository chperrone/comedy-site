<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <?php include( 'php/include-head.php' ); ?>
    </head>
    <body style="background-color: rgb(217, 186, 64)" id="home">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Set Color Scheme-->
<style type="text/css">
.color-b { background-color: rgb(169, 28, 69); }
.color-c { color: rgb(169, 28, 69); }
.nav li a { border: 5px solid rgb(169, 28, 69); }
#current div { color: rgb(169, 28, 69); }
#current a span { color: rgb(169, 28, 69); }

.intro-list {
    display: inline-block;
    padding: 0;
    margin: 0;
    list-style: none;
}

.intro-list > li {
display: inline-block;
float: left;
clear: both;
}

.intro-list p {

}


#enter {
    background-color: rgb(169, 28, 69);
    display: block;
    font-size: 44px;
    text-decoration: none;
    color: white;
    text-align: center;
    width: 400px;
}
</style>
    <div class="color-b">
        <h1 style="font-style: italic; text-align: center" class="white">
            Modern American Stand-Up Comedy
        </h1>
        <div id="bar"></div>
    </div>

<div class="yellow" style="padding-top: 5em">


<div class="gdcenter">
<ul class="nav">
<li id="current"><a href="70s.php"><span class="color-c">70s</span></a></li>
<li id="current"><a href="80s.php"><span class="color-c">80s</span></a></li>
<li id="current"><a href="90s.php"><span class="color-c">90s</span></a></li>
<li id="current"><a href="00s.php"><span class="color-c">00s</span></a></li>
<li id="current"><a href="10s.php"><span class="color-c">10s</span></a></li>
</ul>

<div class="col6" style="position: relative; top: 15px; margin-bottom: 2em; padding-bottom: 10em;">

<h3 class="red-text" style="font-size: 2.5em">Welcome!  Stand-up comedy is one of the oldest American artforms.  People love to laugh, and the funny business has been an important part of American culture throughout the twentieth century.
</h3>

<h3 class="red-text" style="font-size: 2.5em">
Enter this site to learn more about the rich history and events that have happened in the stand-up comedy.
Learn more about some of your favorite comics on an interactive grid and view some of their funniest sketches.    
</h3>

<a id="enter-button" style="clear: both; float: left;" href="70s.php">Start the tour</a>

</div>
<div class="col6 last">
    <img src="img/cover.jpg">
</div>

</div>
</div>

<?php include( 'php/include-foot.php' ); ?>

</body>
</html>
