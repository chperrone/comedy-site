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
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Set Color Scheme-->
            <style type="text/css">
            .color-b { background-color: rgb(169, 28, 69); }
            .color-c { color: rgb(169, 28, 69); }
            #nav li div { border: 5px solid rgb(169, 28, 69); }
            #current div { color: rgb(169, 28, 69); }
            #current a span { color: rgb(169, 28, 69); }

            .intro-list {
                display: inline-block;
                padding: 0;
                margin: 0;
                list-style: none;
            }

            .test {
                padding: 0;
                display: inline-block;

            }

            .test li {
                height: 3em;
                width: 3em;
                border-radius: 50%;
                background-color: #ccc;
                display: block;
                float: left;
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
        <div class="header color-b">
            <h1 style="font-style: italic; text-align: center" class="grey">Modern American Stand-Up Comedy</h1>
            <div id="bar"></div>
        </div>

        <div class="row yellow">
            <div class="gdcenter">

                <ul class="intro-list">
                    <li>
                        <div class="col12">
                        <div class="col4">
                            <ul class="nav" style="position: relative; left: 0;">
                                <li id="current"><a href="70s.php"></a><span>70s</span></li>
                                <li id="current"><a href="80s.php"></a><span>80s</span></li>
                                <li id="current"><a href="90s.php"></a><span>90s</span></li>
                                <li id="current"><a href="00s.php"></a><span>00s</span></li>
                                <li id="current"><a href="10s.php"></a><span>10s</span></li>
                            </ul>
                        </div>
                        <div class="col7">
                            <h3>Go decade by decade and learn about the history and development of modern american
                            stand-up comedy.
                            </h3>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="col4">
                            <i style="color:#ccc"class="fa fa-th-large fa-5x"></i>
                        </div>
                        <div class="col7">
                            <h3>Click the grid icon to learn more about some of your favorite comics like Steve Martin
                            Sarah Silverman and Louis CK, and view their most memorable bits
                            </h3>
                        </div>
                    </li>
                </ul>

                <a id="enter" href="70s.php">Start the tour!</a>

            </div>
        </div>

        <?php include( 'php/include-foot.php' ); ?>

    </body>
</html>
