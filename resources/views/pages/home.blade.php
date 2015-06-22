@extends('master')
@section('header')
    <header>
        <div class="intro">
            <h1>Schubert</h1>
            <div class="arrow">
                <i class="mdi-hardware-keyboard-arrow-down"></i>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="row container center">
                <h2 class="header">Hoi, welcome to my portfolio</h2>
                <p>As promised, there are some cool news. Are you curious? How about a little preview on what’s happening next? Today we’re finally ready to give you a taste of the user experience in Life Awesome, the new social web platform that allows you to log and share the most important moments of your life. It’s as simple as that: the best place, for your best moments. We opted for a three page structure: the STREAM, where we’ll find the latest updates from people you decide to follow or the most awesome achievements of people around the </p>
            </div>
        </div>
        <div class="section">
            <div class="row container center">
                <div class="panel">
                    <div class="me">
                        <img src="http://static1.squarespace.com/static/529d04fde4b0f90e3b528c6c/t/52f1a6e3e4b028d7d4c166ab/1391568677391/Simon-Calllow-portrait-square-crop-500px.jpeg" width="130x" alt="" class="circle responsive-img">
                    </div>
                    <ul>
                        <li>Christian van Schubert</li>
                        <li>04-01-1996</li>
                        <li>Christian.v.scubert@gmail.com</li>
                        <li>(31)653775386</li>
                    </ul>
                </div>
            </div>
        </div>
        {{--<div class="section">--}}
            {{--<div class="row container center">--}}
                {{--<div class="col s12 m6 l4">--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-image waves-effect waves-block waves-light">--}}
                            {{--<img class="activator" src="http://materializecss.com/images/office.jpg">--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span class="card-title activator grey-text text-darken-4">Gerlinda.eu <i class="mdi-navigation-more-vert right"></i></span>--}}
                            {{--<p><a href="#">This is a link</a></p>--}}
                        {{--</div>--}}
                        {{--<div class="card-reveal">--}}
                            {{--<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>--}}
                            {{--<p>Here is some more information about this product that is only revealed once clicked on.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col s12 m6 l4">--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-image waves-effect waves-block waves-light">--}}
                            {{--<img class="activator" src="http://materializecss.com/images/office.jpg">--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span class="card-title activator grey-text text-darken-4">Website.nl <i class="mdi-navigation-more-vert right"></i></span>--}}
                            {{--<p><a href="#">This is a link</a></p>--}}
                        {{--</div>--}}
                        {{--<div class="card-reveal">--}}
                            {{--<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>--}}
                            {{--<p>Here is some more information about this product that is only revealed once clicked on.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col s12 m6 l4">--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-image waves-effect waves-block waves-light">--}}
                            {{--<img class="activator" src="http://materializecss.com/images/office.jpg">--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span class="card-title activator grey-text text-darken-4">Google.nl <i class="mdi-navigation-more-vert right"></i></span>--}}
                            {{--<p><a href="#">This is a link</a></p>--}}
                        {{--</div>--}}
                        {{--<div class="card-reveal">--}}
                            {{--<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>--}}
                            {{--<p>Here is some more information about this product that is only revealed once clicked on.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="section">
            <div class="row container center">
                <div class="timeline">
                    <div class="category exp">
                        <a href="">Experience</a></br>
                        <i class="mdi-file-folder-shared"></i>
                    </div>

                    <div class="post-left">
                        <div class="post tooltipped" data-position="left" data-delay="0" data-tooltip="Done">
                            <div class="post-holder">
                                <div class="post-icon"></div>
                                <div class="post-title">
                                    <h3>Web developer</h3>
                                </div>
                                <div class="post-subtitle">
                                    <h4>Marissen <i class="mdi-action-done dot green"></i> middle 2014 - end 2014</h4>
                                </div>
                                <div class="post-content">
                                   Internship at <a href="http://www.marissen.net">Marissen</a>. Marissen is a small web based company they build website for small and big companies as
                                    <a href="http://girav.nl">Girav.nl</a> and <a href="http://activeants.nl">Activeants.nl</a> and lots more. I had to help on multiple website's, I had to work with html, css, javascript and php. Most websites where made with wordpress and webshops where done with magento.
                                </div>
                            </div>
                        </div>
                        <div class="post tooltipped" data-position="left" data-delay="0" data-tooltip="Upcoming">
                            <div class="post-holder">
                                <div class="post-icon"></div>
                                <div class="post-title">
                                    <h3>Upcoming internship</h3>
                                </div>
                                <div class="post-subtitle">
                                    <h4>Unknown <i class="mdi-image-crop-din dot"></i> 2015 - 2016</h4>
                                </div>
                                <div class="post-content">
                                    Upcoming internship. I have to find a company where i want to do my next internship. I hope to find a company thats specified in android development.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-right">
                        <div class="post tooltipped" data-position="right" data-delay="0" data-tooltip="Current job">
                            <div class="post-holder">
                                <div class="post-icon l"></div>
                                <div class="post-title">
                                    <h3>Web developer</h3>
                                </div>
                                <div class="post-subtitle">
                                    <h4>Disc.bv <i class="mdi-maps-pin-drop dot green"></i> end 2014 - Current</h4>
                                </div>
                                <div class="post-content">
                                    Started working at <a href="http://www.disc-ict.nl">disc bv</a> as a web developer. Disc is a software and hardware company that makes software for factories as
                                    <a href="http://nedair.nl"> Nedair </a>and more. Also three radio stations are clients of disc. Disc manages their audio and the software.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row container center">
                <div class="timeline">
                    <div class="category exp">
                        <a href="">Education</a></br>
                        <i class="mdi-maps-local-library"></i>
                    </div>

                    <div class="post-left">
                        <div class="post tooltipped" data-position="left" data-delay="0" data-tooltip="Current study">
                            <div class="post-holder">
                                <div class="post-icon"></div>
                                <div class="post-title">
                                    <h3>secondary education</h3>
                                </div>
                                <div class="post-subtitle">
                                    <h4>secondary education <i class="mdi-maps-pin-drop dot green"></i> 2013 - current</h4>
                                </div>
                                <div class="post-content">
                                    I currently studying application developer at Landstede Zwolle. We started off with learning OOP object oriented programming with languages as html, css and javascript. Later we started with PHP and Java.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-right">
                            <div class="post tooltipped" data-position="right" data-delay="0" data-tooltip="Next study">
                                <div class="post-holder">
                                    <div class="post-icon l"></div>
                                    <div class="post-title">
                                        <h3>Higher Vocational Education</h3>
                                    </div>
                                    <div class="post-subtitle">
                                        <h4>Fontis Eindhoven <i class="mdi-image-crop-din dot"></i> 2016 - 2020</h4>
                                    </div>
                                    <div class="post-content">
                                        When I pass my current study I want to keep studying application development on a higher level in Eindhoven on Fontis. Fontis is a great school its big and has alot of opportunities for me to become a better programmer.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="row container center">
                    <h2 class="header">What i have done & accomplished</h2>
                    <p>As promised, there are some cool news. Are you curious? How about a little preview on what’s happening next? Today we’re finally ready to give you a taste of the user experience in Life Awesome, the new social web platform that allows you to log and share the most important moments of your life. It’s as simple as that: the best place, for your best moments. We opted for a three page structure: the STREAM, where we’ll find the latest updates from people you decide to follow or the most awesome achievements of people around the </p>
                </div>
            </div>
        </div>
        {{--<div class="parallax-container">--}}
            {{--<div class="parallax"><img src="http://the8guild.com/themes/html/appica2/android/img/intro/intro-bg.png"></div>--}}
            {{--<div class="stats">--}}
                {{--<div class="row container">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}


@stop