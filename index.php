<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <style type="text/css">
        .site-title {
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        
        .site-title-the {
            margin-top: 100px;
        }
        
        .btn-large {
            font-family: "Keep Calm" !important;
            font-size: 20px !important;
        }
        
        .fa {
            color: red;
        }
        
        a:active,
        a:hover {
            color: crimson;
        }
        
        .buy:hover,
        .sell:hover {
            color: white!important;
        }
        
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        
        #wrapper {
            min-height: 100%;
            position: relative;
        }
        
        #header {
            background: #ededed;
            padding: 10px;
        }
        
        #content {
            padding-bottom: 100px;
            /* Height of the footer element */
        }
        
        #footer {
            background: transparent;
            width: 100%;
            height: 100px;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        
       #main-stuff{
           font-weight: 600;
       }
       .foot-text{
           font-weight:400 !important;
           font-family:Lato;
       }
    </style>
</head>

<body>
    <!--Import jQuery before materialize.js-->
    <div id="wrapper">
        <div id="content">
            <!--<nav>
                <div class="nav-wrapper">

                    <ul style="font-family:'Keep Calm';" id="nav-mobile" class="brand-logo center hide-on-med-and-down">
                        <li><a href="sass.html">HOME</a></li>
                        <li><a href="badges.html">INSIDE CB</a></li>
                        <li><a href="collapsible.html">ABOUT</a></li>

                    </ul>

                </div>
            </nav>-->


             <nav class="white" role="navigation">
                <div class="nav-wrapper container">
              <div class="hide-on-med-and-down" style="font-family:'Montserrat';">
                   <center> 
                       <a style="padding:20px;"href="index.php">HOME </a>
                       <a style="padding:20px;"href="">STORE </a>
                        <a style="padding:20px;"href="events.php">EVENTS </a>
                      <a style="padding:20px;"href="qa/answers">QURIOUS </a>
                      <a style="padding:20px;"href="#">INSIDE CB </a>
                      <center>
              </div>

                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#">STORE</a></li>
                        <li><a href="events.php">EVENTS</a></li>
                        <li><a href="qa/answers">QURIOUS</a></li>
                        <li><a href="#">INSIDE CB</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>

            <div id="main-stuff" class="responsive-img">
                <div style="font-family:'Roboto'; font-size:20px;" class="site-title-the center">
                    <span class=" "> THE</span>
                </div>
                <div style="font-family: 'Roboto'; font-size:50px;" class="site-title center">
                    <span class="t"> CAMPUS BAZAAR</span>
                </div>

                <div class="container">

                    <div class="row">

                        <div class="col s6">
                            <center>
                                <a class="waves-effect waves-light btn-large buy"><i class="material-icons left">cloud</i><span class="flow-text">BUY</span></a>
                            </center>
                        </div>
                        <div class="col s6">
                            <center>
                                <a class="waves-effect waves-light btn-large sell"><i class="material-icons right">cloud</i><span class="flow-text">SELL</span></a>
                            </center>
                        </div>
                    </div>
                </div>




                <div id="footer">

                    <footer>

                        <div class="container foot-text">
                            <div class="row">

                                <center>
                                    <div class="col s6">
                                        &copy 2016 The Campus Bazaar
                                    </div>

                                    <div class="col s6">

                                         Designed with <i class="fa fa-heart"></i> by Team CB
                                    </div>

                            </div>


                        </div>
                    </footer>

                </div>
            </div>
        </div>

    </div>

</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    (function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

</script>

</html>