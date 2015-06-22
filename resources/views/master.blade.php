<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="assets/css/app.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
    <body>

        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <div class="row container">
                        {{--<img src="http://i.imgur.com/i1GZyoB.png" width="64px" alt=""/>--}}
                    <a href="#!" class="brand-logo"><i class="mdi-action-thumbs-up-down"></i></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="javascript.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                    </div>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="javascript.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        @yield('header')
        @yield('content')
        {{--<footer class="page-footer">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col l6 s12">--}}
                        {{--<h5 class="white-text">Footer Content</h5>--}}
                        {{--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>--}}
                    {{--</div>--}}
                    {{--<div class="col l4 offset-l2 s12">--}}
                        {{--<h5 class="white-text">Links</h5>--}}
                        {{--<ul>--}}
                            {{--<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>--}}
                            {{--<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>--}}
                            {{--<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>--}}
                            {{--<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="footer-copyright">--}}
                {{--<div class="container">--}}
                    {{--© 2014 Copyright Text--}}
                    {{--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</footer>--}}
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script>
            $(".button-collapse").sideNav();
            $(document).ready(function(){
                $('ul.tabs').tabs();
            });
            $(document).ready(function(){
                $('.parallax').parallax();
            });
            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });
            $(document).ready(function(){
                $('.tooltipped').tooltip({delay: 50});
            });


        </script>
    </body>
</html>
