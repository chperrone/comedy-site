<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comic Grid</title>
    <?php include( 'php/include-head.php' ); ?>

    <!-- Set Color Scheme-->
    <style type="text/css">
        .color-b { background-color: rgb(169, 28, 69); }
        .color-c { color: rgb(169, 28, 69); }
        ul.nav li a { border: 5px solid rgb(169, 28, 69); }
        li#current a { color: rgb(169, 28, 69); }
        li#current a span { color: rgb(169, 28, 69); }
    </style>

    <script type="text/javascript">
    $(document).ready(function() {


        $('.comic-grid > div > div').each(function() {
            var my_id = $(this).attr('id');
            console.log(my_id);

            var request = $.ajax({
                url: "php/script.php",
                type: "POST",
                data: { data: my_id },
                dataType: "html"
                });

            request.done(function( msg ) {
            $( '.all-lightboxes' ).append( msg );
            });

            request.fail(function() {
            $( '.all-lightboxes' ).append( 'PHP Error' );
            });

            });
    });
    </script>

    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
</head>
<body style="background-color: rgb(217, 186, 64)">

<!-- Include the header -->
<?php include( 'php/include-nav.php' ); ?>

<div class="row">
</br></br></br></br></br></br>
    <div class="gdcenter comic-grid">
        <h2 class="color-c" style="border-bottom: 4px solid rgb(169, 28, 69); padding-bottom: 15px">Click on a comedian's portrait below to view more information about them, as well as some of their most memorable bits.</h2>
        <div class="col3" data-featherlight="#steve-martin-box">
            <div id="Steve Martin">
                <img src="img/headshots/steve-martin.jpg">
                <span>Steve Martin</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#george-carlin-box">
            <div id="George Carlin">
                <img src="img/headshots/george-carlin.jpg">
                <span>George Carlin</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#robin-williams-box">
            <div id="Robin Williams">
                <img src="img/headshots/robin-williams.jpg">
                <span>Robin Williams</span>
            </div>
        </div>
        <div class="col3 last" data-featherlight="#richard-pryor-box">
            <div id="Richard Pryor">
                <img src="img/headshots/richard-pryor.jpg">
                <span>Richard Pryor</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#joan-rivers-box">
            <div id="Joan Rivers">
                <img src="img/headshots/joan-rivers.jpg">
                <span>Joan Rivers</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#bill-cosby-box">
            <div id="Bill Cosby">
                <img src="img/headshots/bill-cosby.jpg">
                <span>Bill Cosby</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#eddie-murphy-box">
            <div id="Eddie Murphy">
                <img src="img/headshots/eddie-murphy.jpg">
                <span>Eddie Murphy</span>
            </div>
        </div>
        <div class="col3 last" data-featherlight="#rodney-dangerfield-box">
            <div id="Rodney Dangerfield">
                <img src="img/headshots/rodney-dangerfield.jpg">
                <span>Rodney Dangerfield</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#dana-gould-box">
            <div id="Dana Gould">
                <img src="img/headshots/dana-gould.jpg">
                <span>Dana Gould</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#sarah-silverman-box">
            <div id="Sarah Silverman">
                <img src="img/headshots/sarah-silverman.jpg">
                <span>Sarah Silverman</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#patton-oswalt-box">
            <div id="Patton Oswalt">
                <img src="img/headshots/patton-oswalt.jpg">
                <span>Patton Oswalt</span>
            </div>
        </div>
        <div class="col3 last" data-featherlight="#chris-rock-box">
            <div id="Chris Rock">
                <img src="img/headshots/chris-rock.png">
                <span>Chris Rock</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#dane-cook-box">
            <div id="Dane Cook">
                <img src="img/headshots/dane-cook.jpg">
                <span>Dane Cook</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#louis-ck-box">
            <div id="Louis CK">
                <img src="img/headshots/louis-ck.jpg">
                <span>Louis CK</span>
            </div>
        </div>
        <div class="col3" data-featherlight="#dave-chappelle-box">
            <div id="Dave Chappelle">
                <img src="img/headshots/dave-chappelle.jpg">
                <span>Dave Chappelle</span>
            </div>
        </div>
        <div class="col3 last" data-featherlight="#maria-bamford-box">
            <div id="Maria Bamford">
                <img src="img/headshots/maria-bamford.jpg">
                <span>Maria Bamford</span>
            </div>
        </div>
    </div>
</div>

<div style="height: 7em; clear: both"></div>

<div class="all-lightboxes"></div>

<?php include( 'php/include-foot.php' ); ?>

</body>
</html>