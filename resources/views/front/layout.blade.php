<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="{{ config('app.locale') }}"> <!--<![endif]-->
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
    <title>SIRIVISA Creative</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('front/img/favicon.png')}}" rel="icon">
    <link href="{{asset('front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="{{asset('front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <style>
        input::placeholder {
            font-size: 14px;
        }
    </style>
	@yield('css')

</head>

<body style="background-color:#eaeaea;">

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm p-3 mb-5 bg-white rounded">
        <a class="navbar-brand" href="#" style="color:#7f0964;font-weight:bolder;font-size:20px;">SIRIVISA <span style="color:grey;font-size:18px;">Creative</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon" style="font-size:18px;font-weight:bold;color:#7f0964"><i class="fas fa-bars" style="margin-left:5px;font-size:25px;"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto" style="padding-right:90px;">
                <li class="nav-item active">
                    <a class="nav-link" href="/" style="color:black;font-size:15px;font-weight:400;letter-spacing:0;">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" target="" style="color:black;font-size:15px;font-weight:400m;letter-spacing:0;">About Us </a>
                </li>
                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color:black;font-size:15px;font-weight:400;letter-spacing:0;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size:15px;">
                            <a class="dropdown-item" href="{{ route('content') }}" target="">Social Media Marketing</a>
                            <a class="dropdown-item" href="{{ route('creative') }}" target="">Creative Services</a>
                            <a class="dropdown-item" href="{{ route('consulting') }}" target="">Consulting</a>
                        </div>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ route('contact') }}" target="" style="color:black;font-size:15px;font-weight:400;letter-spacing:0;">Contact</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ route('login') }}" target="" style="color:black;font-size:15px;font-weight:400;letter-spacing:0;">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" target="" style="color:black;font-size:15px;font-weight:400;letter-spacing:0;">Sign up</a>
                </li>
                @else
                <li class="nav-item">
                    <a id="logout" class="nav-link" href="{{ route('logout') }}" target="" style="color:black;font-size:15px;font-weight:400;letter-spacing:0;">Logout</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
						{{ csrf_field() }}
					</form>
                </li>
                @endguest
            </ul>

        </div>
    </nav>
   	<main>
   @yield('main')
	</main>
   <!-- footer
   ================================================== -->
   	<footer>
   		<div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-lg-5 col-xs-5 col-md-5">
                    <div class="form-group wow fadeInUp">
                        <h4 style="font-size:20px;color:black;padding-top:2px;font-weight:300;letter-spacing:1px;">We also make emails...</h4>
                        <br>
                        <h6 style="color:black;font-size:13px;letter-spacing:0px;line-height:23px;">We only send emails when we have something valuable to share. The problem is too many websites send out crap no one wants to read and  we don't want to blow up your inbox with "deals" and clickbaits. 
                     When we have something valuable to share we will, so you can expect 1 email a
                      month or maybe less. If we're not sending you enough, you miss us and
                      just want to say 'HI' just use the contact form and we'd be happy to chat</h6>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-envelope" style="font-size:33px;color:#7f0964;margin-right:8px;margin-top:2px;"></i>
                          </span>

                            <input type="text" class="form-control" placeholder="What's your email?" style="border-radius:10px;border:2.3px solid #7f0964;background:transparent;">
                            <button id="a" class="hi" type="signup" style="margin-left:5px;">Join!</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2 col-lg-4" style="padding-top:20px;">
                    <div class="list-menu" id="k">

                        <ul class="list-unstyled wow fadeInUp">
                            <li><a href="{{route('home')}}" style="font: size 12px;letter-spacing:0px;color:black;">HOME</a></li>
                            <li><a href="{{route('about')}}" style="font-size:12px;letter-spacing:0px;color:black;">About Us</a></li>
                            <li><a href="{{route('contact')}}" style="font-size:12px;letter-spacing:0px;color:black;">Contact</a></li>
                            <li><a href="#" style="font-size:12px;letter-spacing:0px;color:black;">Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3" style="padding-top:20px;">
                    <div class="list-menu">

                        <ul class="list-unstyled wow fadeInUp">
                            <li><a href="#" style="font-size:12px;letter-spacing:0px;color:black;">SERVICES</a></li>
                            <li><a href="{{route('content')}}" style="font-size:12px;letter-spacing:0px;color:black;">Social  Media Marketing</a></li>
                            <li><a href="{{route('creative')}}" style="font-size:12px;letter-spacing:0px;color:black;">Creative Services</a></li>
                            <li><a href="{{route('consulting')}}" style="font-size:12px;letter-spacing:0px;color:black;">Consulting</a></li>
                        </ul>

                        <div class="containter fadeInUp">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="list-menu">

                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="social-links">
                                                    <a href="https://www.facebook.com/sirivisacreative" class="facebook" target="_blank"><i class="fa fa-facebook" style="font-size:23px;"></i></a>
                                                    <a href="https://www.instagram.com/sirivisacreative" class="instagram" target="_blank"><i class="fa fa-instagram" style="font-size:23px;"></i></a>
                                                    <a href="https://www.facebook.com/sirivisacreative" class="facebook" target="_blank"><i class="fa fa-linkedin" style="font-size:23px;"></i></a>

                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <div class="copyrights">
                                                <div class="container">
                                                    <p style="font-size:10px">&copy;Copyrights SIRIVISA Creative. All rights reserved 2019</p>

                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
   	</footer>
   	<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up" style="color:#7f0964;font-size:28px;"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('front/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('front/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('front/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front/lib/modal-video/js/modal-video.js')}}"></script>
    <script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/lib/wow/wow.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('front/contactform/contactform.js')}}"></script>
    <script src="{{asset('front/js/form-validator.min.js')}}"></script>
    <script src="{{asset('front/js/contact-form-script.js')}}"></script>
    <script src="{{asset('front/js/login-form-script.js')}}"></script>
    <script src="{{asset('front/js/register-form-script.js')}}"></script>
    <script src="{{asset('front/js/email-form-script.js')}}"></script>
    <script src="{{asset('front/js/reset-form-script.js')}}"></script>
    <!-- Template Main Javascript File -->
    <script src="{{asset('front/js/main.js')}}"></script>
    <script src="{{asset('front/js/wow.js')}}"></script>

    <script>
        (function() {
            var Util,
                __bind = function(fn, me) {
                    return function() {
                        return fn.apply(me, arguments);
                    };
                };

            Util = (function() {
                function Util() {}

                Util.prototype.extend = function(custom, defaults) {
                    var key, value;
                    for (key in custom) {
                        value = custom[key];
                        if (value != null) {
                            defaults[key] = value;
                        }
                    }
                    return defaults;
                };

                Util.prototype.isMobile = function(agent) {
                    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
                };

                return Util;

            })();

            this.WOW = (function() {
                WOW.prototype.defaults = {
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: true
                };

                function WOW(options) {
                    if (options == null) {
                        options = {};
                    }
                    this.scrollCallback = __bind(this.scrollCallback, this);
                    this.scrollHandler = __bind(this.scrollHandler, this);
                    this.start = __bind(this.start, this);
                    this.scrolled = true;
                    this.config = this.util().extend(options, this.defaults);
                }

                WOW.prototype.init = function() {
                    var _ref;
                    this.element = window.document.documentElement;
                    if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
                        return this.start();
                    } else {
                        return document.addEventListener('DOMContentLoaded', this.start);
                    }
                };

                WOW.prototype.start = function() {
                    var box, _i, _len, _ref;
                    this.boxes = this.element.getElementsByClassName(this.config.boxClass);
                    if (this.boxes.length) {
                        if (this.disabled()) {
                            return this.resetStyle();
                        } else {
                            _ref = this.boxes;
                            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                                box = _ref[_i];
                                this.applyStyle(box, true);
                            }
                            window.addEventListener('scroll', this.scrollHandler, false);
                            window.addEventListener('resize', this.scrollHandler, false);
                            return this.interval = setInterval(this.scrollCallback, 50);
                        }
                    }
                };

                WOW.prototype.stop = function() {
                    window.removeEventListener('scroll', this.scrollHandler, false);
                    window.removeEventListener('resize', this.scrollHandler, false);
                    if (this.interval != null) {
                        return clearInterval(this.interval);
                    }
                };

                WOW.prototype.show = function(box) {
                    this.applyStyle(box);
                    return box.className = "" + box.className + " " + this.config.animateClass;
                };

                WOW.prototype.applyStyle = function(box, hidden) {
                    var delay, duration, iteration;
                    duration = box.getAttribute('data-wow-duration');
                    delay = box.getAttribute('data-wow-delay');
                    iteration = box.getAttribute('data-wow-iteration');
                    return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
                };

                WOW.prototype.resetStyle = function() {
                    var box, _i, _len, _ref, _results;
                    _ref = this.boxes;
                    _results = [];
                    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                        box = _ref[_i];
                        _results.push(box.setAttribute('style', 'visibility: visible;'));
                    }
                    return _results;
                };

                WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
                    var style;
                    style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
                    if (duration) {
                        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
                    }
                    if (delay) {
                        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
                    }
                    if (iteration) {
                        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
                    }
                    return style;
                };

                WOW.prototype.scrollHandler = function() {
                    return this.scrolled = true;
                };

                WOW.prototype.scrollCallback = function() {
                    var box;
                    if (this.scrolled) {
                        this.scrolled = false;
                        this.boxes = (function() {
                            var _i, _len, _ref, _results;
                            _ref = this.boxes;
                            _results = [];
                            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                                box = _ref[_i];
                                if (!(box)) {
                                    continue;
                                }
                                if (this.isVisible(box)) {
                                    this.show(box);
                                    continue;
                                }
                                _results.push(box);
                            }
                            return _results;
                        }).call(this);
                        if (!this.boxes.length) {
                            return this.stop();
                        }
                    }
                };

                WOW.prototype.offsetTop = function(element) {
                    var top;
                    top = element.offsetTop;
                    while (element = element.offsetParent) {
                        top += element.offsetTop;
                    }
                    return top;
                };

                WOW.prototype.isVisible = function(box) {
                    var bottom, offset, top, viewBottom, viewTop;
                    offset = box.getAttribute('data-wow-offset') || this.config.offset;
                    viewTop = window.pageYOffset;
                    viewBottom = viewTop + this.element.clientHeight - offset;
                    top = this.offsetTop(box);
                    bottom = top + box.clientHeight;
                    return top <= viewBottom && bottom >= viewTop;
                };

                WOW.prototype.util = function() {
                    return this._util || (this._util = new Util());
                };

                WOW.prototype.disabled = function() {
                    return !this.config.mobile && this.util().isMobile(navigator.userAgent);
                };

                return WOW;

            })();

        }).call(this);

        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200); // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 500);
        });
	   $(function() {
		   $('#logout').click(function(e) {
			   e.preventDefault();
			   $('#logout-form').submit()
		   })
	   })
    </script>

   @yield('scripts')

</body>

</html>
