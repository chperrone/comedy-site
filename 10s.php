<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>The 2010s</title>
        <?php include( 'php/include-head.php' ); ?>
    </head>

<body>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Include the header -->
<?php include( 'php/include-nav.php' ); ?>

<script type="text/javascript">
    //Set header and current year
    $('.nav li').eq(4).attr('id', 'current');
</script>

<!-- Set Color Scheme-->
<style type="text/css">
.color-b { background-color: rgb(197, 105, 40); }
.color-c { color: rgb(197, 105, 40); }
ul.nav li { transition: .75s ease-out; }
ul.nav li a { border: 5px solid rgb(197, 105, 40); }
li#current a { color: rgb(197, 105, 40); }
li#current span { color: rgb(197, 105, 40); }
</style>

<!-- ====================================
    YELLOW BLEED
====================================== -->
<div class="row yellow">
    <div class="gdcenter">
        <div class="row">
            <h3 class="color-c">The 2010s is providing a new landscape for comedians to share their comedy.  
            Computers are now completely ingrained into human life, people are reaching out and interacting
            with stand up in new ways.  The most succesful comedians utilize these facts and make commentary
            about life as it is now.
            </h3>

            <h3 class="grey-text">We live in a world now where creativity and originality are more crucial 
            then ever for entertainers of any kind to be succesful.  The most interesting comics, then, are
            the ones who adapt to new trends and technologies.  Their stand-up routines are culturally relevant
            to things that are happening to us: cellphones and computers, the internet, and digital isolation.
            </h3>  
        </div>
    </div>
</div>

<!-- ====================================
    MAIN CONTENT
====================================== -->
<div class="row">
    <div class="gdcenter">
        <div class="col12">
            <h1>New Mediums</h1>
        </div>
        <div class="col8">
            <h3>
            The current state of stand-up comedy is alive and well.  Comedians like Aziz Ansari,
            Kevin Hart and others are still carrying on the tradition of spoken word storytelling.  
            Other comedians, however, are exploring more varied mediums of comedy.</br>
            Louis CK, an already established comedian and filmmaker, has had 3 succesful seasons of
            his hit TV show "Louie".  In the show, he plays himself and takes viewers through the
            troubling and awkward moments of his life.  The episodes feature his signature dark 
            sense of humor and read more as short films than as sitcoms.  In addition, He includes 
            stand-up segments from his current act.  "Louie" is a groundbreaking Tv show, because 
            it breaks genre stereotypes of what a comedy tv show should be.  Sarah Silverman, a 
            friend and colleague of his, has said of the show: 
            </h3>
        </div>
        <div class="col7 quote">
            He's a gamechanger.  He is so prolific, and what he does is he 
            does his special, he books the next special before he has a f**** joke written for it!
            Which is so balls out.  And it's brilliant!  <span>- Sarah Silverman</span>
        </div>
        <div class="col12">
            <img src="img/louie.jpg">
        </div>
        <div class="col6">
            <p>Other comedians are doing groundbreaking work also.  Marc Maron has established 
                a podcast show called "WTF with Marc Maron".  Part of the show is confessional, 
                neurotic comedy monologues.  In this part of the show he discusses current issues 
                in his life.  For the next part, he invites guest of all disciplines onto the show: 
                musicians, comedians, actors, writers.  Such guests have included Nick Cave, 
                Thom Yorke, Jim Gaffigan and Louis CK.
            </p>
            <img src="img/Maron.png">
        </div>
    </div>  <!-- CLOSE GDCENTER -->
</div>  <!-- CLOSE ROW -->

<div class="footer-wrap">
    <div class="footer"></div>
</div>

<?php include( 'php/include-foot.php' ); ?>
</body>
</html>
