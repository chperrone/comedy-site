<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The 1980s</title>
    <?php include( 'php/include-head.php' ); ?>
</head>

<body class="page-80">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">
upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Set Up the Color Scheme-->

<!-- Include the header -->
<?php include( 'php/include-nav.php' ); ?>

<script type="text/javascript">

//Set header and current year
$('.nav li').eq(1).attr('id', 'current');
</script>

<!-- Set Color Scheme-->
<style type="text/css">
.color-b { background-color: rgb(22, 105, 135); }
.color-c { color: rgb(22, 105, 135); }
ul.nav li { transition: .75s ease-out; }
ul.nav li a { border: 5px solid rgb(22, 105, 135); }
li#current a { color: rgb(22, 105, 135); }
li#current span { color: rgb(22, 105, 135); }
</style>

<div class="row yellow">
    <div class="gdcenter">
        <div class="row">

            <h2 class="color-c">The 1980s</h2>

            <h3 class="color-c">The 1980’s ushered a new era of comedy. The success and growth
            of the club scene in America had solidified stand-up as a sought after art form.  In the 1980s,
            the funny business boomed.</h3>

        </div>
    </div>
</div>


<div class="row">
    <div class="gdcenter">
        <div class="col12 first">
            <h1>Television and Sitcoms.</h1>

            <div class="col5">  

                <p>The '80s also became
                    the decade that stand-up exploded on television. Sitcoms featuring comedians,
                    such as The Cosby Show and Roseanne, became massive hits. And though comics had
                    always been given the opportunity to perform on late-night talk shows (like
                    Johnny Carson'sTonight Show) and variety shows, new programs appeared on TV in
                    the '80s devoted solely to stand-up comedy. The A&E cable network debuted An
                    Evening at the Improv. 
                </p>

                <h3 class="color-c open-box">
                HBO, which came to popularity in the '80s, aired regular
                comedy specials like the HBO Comedy Hour and the Young Comedians Showcase. Even
                MTV started showcasing stand-up comics with its show Half-hour Comedy Hour,
                hosted by comedian Mario Joyner.  
                </h3> 
            </div>
                <div class="col6 last">                         
                    <img src="img/cosby-show.jpg">
                    <p class="f-caption">
                        A promotional poster for the
                        Cosby Show.  One of the most popular comics of the 70's, the Cosby show was an
                        extension of Bill Cosby's stand-up character, a well-mannered family man.
                    </p>

                    <div class="comic-tab-wrap">
                        <a class="comic-tab color-b" id="Bill Cosby" data-featherlight="#bill-cosby-box">
                            <div class="mic-wrap"><img src="img/microphone.png"></div>

                            <div class="tab-text">
                                <p>learn more about</p>
                                <h3>Bill Cosby</h3>
                            </div>
                        </a> 
                    </div>   

                </div>  

                <div class="col5">
            <p>For many comedians, the crossover to TV was very easy - after all, they were actors
                    at heart.  While some comedians broke through in the 80s club scene, for young
                    comics, TV shows and sitcoms were another viable way                         to
                    get noticed in the funny business.  Shows like Roseanne and The Cosby Show were
                    extremely popular in the 80s.  The Cosby Show was a landmark television show,
                    because it was one of the first times a show was based on a comedian's
                    character, rather than a comedian developing a new character for the show.
                </p>
                
            </div>                      
        </div>   

        <div class="col12">
            <h1>Comic Relief</h1>
            <div class="col6">
                <h3 class="color-c">The success of stand-up and the large audiences it commanded created an opportunity for comedians to make real change.
                </h3>

                <div class="col5">
                    <p>The success of stand-up and the large audiences it commanded created an opportunity for
                    comedians to make real change. Originally started in the UK, Bob Zmuda created a charitable
                    organization called Comic Relief in 1986. The event raised money for homeless in America. Many
                     high profile actors and comedians participated in the event by doing short comic routines.
                    The event was aired each year on HBO.
                    </p>
                </div>
            </div>

            <div class="col5">
                <img src="img/comic-relief.jpg">
                <p class="f-caption">
                    Whoopi Goldberg, Robin Williams, and Billy Crystal hosting the 1988 Comic Relief event. 
                     Celebrities often got involved and hosted the event, telling jokes and skits discussing
                      homelessness in America.
                </p>
            </div>
        </div>     
    </div>
</div>

<div class="footer">
        <a href="90s.php">
            <img class="full-bleed" src="img/richard-pryor.png">
            <div>
                <h1 class="grey">continue to the <span class="color-c">1990s</span></h1>
            </div>
        </a>
</div>

    <!-- ==============================
            LIGHTBOXES
        =============================== -->
    <div class="all-lightboxes"></div>

    <?php include( 'php/include-foot.php' ); ?>
</body>
</html>
