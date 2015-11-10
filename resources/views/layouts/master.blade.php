<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>App Name - @yield('title')</title>
        <meta name="keywords" content="HTML5,CSS3,Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="epona/images/demo/favicon.ico" />

        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="epona/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/sky-forms.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/line-icons.css" rel="stylesheet" type="text/css" />
        <link href="epona/plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
        <link href="epona/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/flexslider.css" rel="stylesheet" type="text/css" />

        <!-- REVOLUTION SLIDER -->
        <link href="epona/css/revolution-slider.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/layerslider.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="epona/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/layout.css" rel="stylesheet" type="text/css" />
        <!--<link href="epona/css/header-4.css" rel="stylesheet" type="text/css" />-->
        <link href="epona/css/header-transparent.css" rel="stylesheet" type="text/css">
        <link href="epona/css/footer-default.css" rel="stylesheet" type="text/css" />
        <link href="epona/css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />

        <!-- Morenizr -->
        <script type="text/javascript" src="epona/plugins/modernizr.min.js"></script>

        <!--[if lte IE 8]>
                <script src="epona/plugins/respond.js"></script>
        <![endif]-->
        <style>
            #topNav ul.nav>li a {
                color:#444444;
                font-weight: bolder;
                font-size:1.4em;   
                font-family: FontAwesome
            }
            
            #topNav ul.nav>li a:hover {
                color:#d31e00;
                font-weight: bolder;
                font-size:1.4em;   
                font-family: FontAwesome
            }
            strong{
                color:#d31e00;
            }    
        </style>
    </head>

    <!-- 
            Available body classes: 
                    smoothscroll			= enable chrome browser smooth scroll
                    grey 					= grey content background
                    boxed 					= boxed style
                    pattern1 ... pattern11 	= background pattern

            Background Image - add to body: 
                    data-background="epona/images/boxed_background/1.jpg"

            Examples: 
                    <body class="smoothscroll grey boxed pattern3">
                    <body class="smoothscroll boxed" data-background="epona/images/boxed_background/1.jpg">
    -->
    <body class="smoothscroll">

        <div id="wrapper">

            
            
            
            
            
            @yield('content')
            
            @include('layouts.footer')
            

            <a href="#" id="toTop"></a>

        </div><!-- /#wrapper -->

        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript" src="epona/plugins/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="epona/plugins/jquery.isotope.js"></script>
        <script type="text/javascript" src="epona/plugins/masonry.js"></script>

        <script type="text/javascript" src="epona/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="epona/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="epona/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="epona/plugins/knob/js/jquery.knob.js"></script>
        <script type="text/javascript" src="epona/plugins/flexslider/jquery.flexslider-min.js"></script>

        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="epona/plugins/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="epona/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="epona/js/revolution_slider.js"></script>


        <script type="text/javascript" src="epona/js/scripts.js"></script>
        <!--<script type="text/javascript" src="epona/plugins/styleswitcher/styleswitcher.js">/** REMOVE ON PRODUCTION **/</script>-->
    </body>
</html>