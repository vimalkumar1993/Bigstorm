<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from demo.themesease.com/SoftEase/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2016 05:37:58 GMT -->
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- ========== VIEWPORT META ========== -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- ========== PAGE TITLE ========== -->
        <?php include('common/title.php'); ?>

        <!-- ========== META TAGS ========== -->
        <?php include('common/meta.php'); ?>

        <!-- ========== FAVICON & APPLE ICONS ========== -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- ========== MINIFIED VENDOR CSS ========== -->
        <link rel="stylesheet" href="styles/vendor.css">

        <link rel="stylesheet" href="styles/sweetalert2.min.css">
        <link rel="stylesheet" href="styles/main.css">

        <script src='../../www.google.com/recaptcha/api.js'></script>

        <!-- ========== MODERNIZR ========== -->
    	<script src="scripts/vendor/modernizr.js"></script>
    </head>

    <!-- ========== BODY ==========
    .light-header: for light colored header
    .dark-header: for dark colored header
    ==========  ========== -->
    <body class="dark-header animsition">

        <!-- ========== NAVIGATION ========== -->
    	<?php include('common/header.php'); ?>

        <!-- ========== PAGE TITLE ========== -->
        <header class="header page-title" >
            <div class="container">
                <!-- For centering the content vertically -->
                <div class="outer">
                    <div class="inner text-center">
                        <h1 class="">Contact Us</h1>
                        <h5 class="">We will get back to you as soon as possible.</h5>

                    </div> <!-- end inner -->
                </div> <!-- end outer -->
            </div> <!-- end container -->
        </header>

        <!-- ========== CONTACT US FORM ========== -->
        <section class="se-section">
            <div class="container">
                <div class="row">
                    <form class="col-md-9 col-sm-6" action="http://demo.themesease.com/SoftEase/send-email-mailgun.php" method="post" id="form">
                        <div class="form-group col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name.." required="">
                        </div> <!-- end form-group -->
                        <div class="form-group col-md-6">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name.." required="">
                        </div> <!-- end form-group -->
                        <div class="form-group col-md-12">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Id.." required="">
                        </div> <!-- end form-group -->
                        <div class="form-group col-md-12">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Enter your message here.."></textarea>
                        </div> <!-- end form-group -->

                        <div class="form-group col-md-12">
                            <div class="g-recaptcha" data-sitekey="6LdrSCQTAAAAAFvP5P_RHmBQreGEHEiAIR3rc8FW"></div>
                        </div>

                        <div class="text-center col-md-12 mt10 mb20">
                            <button type="submit" class="btn se-btn btn-rounded">Submit</button>
                        </div> <!-- end text-center -->
                    </form>

                    <div class="col-md-3 col-sm-6 contact-info">
                        <h6 class="underline mtn">Branch Office</h6>
                        <p>
                           Tamil Nadu, India <br />
                           Bangalore, India
                        </p>
                        <h6 class="underline mtn">Email Address</h6>
                        <p>
                            <a style="text-decoration: none;color:#666">help@bigstorm.com</a>
                        </p>
                    </div> <!-- end contact-info -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

        <!-- ========== MAP SECTION ========== -->
    	<div id='fullWidthMap'></div>

        <!-- ========== FAQ SECTION ========== -->
        <section class="se-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 se-faq">
                        <h6 class="underline">What exactly you get with this?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                    </div> <!-- end se-faq -->

                    <div class="col-md-6 col-sm-6 se-faq">
                        <h6 class="underline">How do you decide charges for this?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                    </div> <!-- end se-faq -->

                    <div class="col-md-6 col-sm-6 se-faq">
                        <h6 class="underline">What are deliverables in this service?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                    </div> <!-- end se-faq -->

                    <div class="col-md-6 col-sm-6 se-faq">
                        <h6 class="underline">How many resources are involved?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                    </div> <!-- end se-faq -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

        <!-- ========== CTA SECTION ========== -->
        <section class="se-section primary-bg">
            <div class="container">
                <div class="row text-center">
                    <h3>Create Your Account Now!</h3>
                    <p>Get 30 days trial. No credit card required.</p>
                    <a href="#" class="btn se-btn-black btn-rounded">SIGN UP</a>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

        <!-- ========== FOOTER ========== -->
        <footer class="light-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <img src="images/dark-logo.svg" alt="" class="footer-logo">
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h6 class="mtn">HOME</h6>
                        <ul>
                            <li><a href="#">Parallax Background</a></li>
                            <li><a href="#">Animated Background</a></li>
                            <li><a href="#">Solid Color</a></li>
                            <li><a href="#">Gradient Background</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h6 class="mtn">PAGES</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Features</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h6 class="mtn">OTHER</h6>
                        <ul>
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0">
                        <h6 class="mtn">SUBSCRIBE</h6>
                        <div class="input-group">
                            <input type="email" class="form-control inp-rounded" placeholder="Enter your email id">
                            <span class="input-group-btn">
                                <button class="btn se-btn btn-rounded" type="button">Subscribe!</button>
                            </span> <!-- end input-group-btn -->
                        </div><!-- end input-group -->
                        <p class="text-center text-muted">We don't spam!</p>
                    </div>
                </div> <!-- end row -->

                <div class="row footer-bottom">
                    <div class="col-md-6">
                        <p>Copyright &copy; SoftEase Technologies. 2016. All Rights Reserved.</p>
                    </div>

                    <div class="col-md-6 text-right">
                        <h6><a href="#">FACEBOOK</a></h6>
                        <h6><a href="#">TWITTER</a></h6>
                        <h6><a href="#">LINKEDIN</a></h6>
                        <h6><a href="#">GOOGLE PLUS</a></h6>
                    </div>
                </div> <!-- end footer-bottom -->
            </div> <!-- end container -->
        </footer>


    	<script src="scripts/vendor.js"></script>

        <!-- ========== MINIFIED PLUGINS JS ========== -->
    	<script src="scripts/plugins.js"></script>

    	<script src="scripts/main.js"></script>

        <script src="../../maps.googleapis.com/maps/api/js555e?key=&amp;sensor=false&amp;extension=.js"></script>
        <script src="scripts/vendor/jquery.form.js"></script>
        <script src="scripts/vendor/sweetalert2.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // For Ajax Form
    			var options = {
    	            success: function() {
    	                $("#form").clearForm();
    	                swal("Thank You!", "We will get back to you as soon as possible!", "success");
    	            }
    	        };
    	        $("#form").ajaxForm(options);

                // For Customized Google Map
                google.maps.event.addDomListener(window, 'load', init);
                var map;
                function init() {
                    var mapOptions = {
                        center: new google.maps.LatLng(40.740697, -73.988786),
                        zoom: 16,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.DEFAULT,
                        },
                        disableDoubleClickZoom: true,
                        mapTypeControl: true,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                        },
                        scaleControl: true,
                        scrollwheel: false,
                        panControl: true,
                        streetViewControl: true,
                        draggable : true,
                        overviewMapControl: true,
                        overviewMapControlOptions: {
                            opened: false,
                        },
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        styles: [
                              {
                                "featureType": "water",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "color": "#d3d3d3" }
                                ]
                              },{
                                "featureType": "transit",
                                "stylers": [
                                  { "color": "#808080" },
                                  { "visibility": "off" }
                                ]
                              },{
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                  { "visibility": "on" },
                                  { "color": "#b3b3b3" }
                                ]
                              },{
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "color": "#ffffff" }
                                ]
                              },{
                                "featureType": "road.local",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "visibility": "on" },
                                  { "color": "#ffffff" },
                                  { "weight": 1.8 }
                                ]
                              },{
                                "featureType": "road.local",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                  { "color": "#d7d7d7" }
                                ]
                              },{
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "visibility": "on" },
                                  { "color": "#ebebeb" }
                                ]
                              },{
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [
                                  { "color": "#a7a7a7" }
                                ]
                              },{
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "color": "#ffffff" }
                                ]
                              },{
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "color": "#ffffff" }
                                ]
                              },{
                                "featureType": "landscape",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "visibility": "on" },
                                  { "color": "#efefef" }
                                ]
                              },{
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                  { "color": "#696969" }
                                ]
                              },{
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                  { "visibility": "on" },
                                  { "color": "#737373" }
                                ]
                              },{
                                "featureType": "poi",
                                "elementType": "labels.icon",
                                "stylers": [
                                  { "visibility": "off" }
                                ]
                              },{
                                "featureType": "poi",
                                "elementType": "labels",
                                "stylers": [
                                  { "visibility": "off" }
                                ]
                              },{
                                "featureType": "road.arterial",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                  { "color": "#d6d6d6" }
                                ]
                              },{
                                "featureType": "road",
                                "elementType": "labels.icon",
                                "stylers": [
                                  { "visibility": "off" }
                                ]
                              },{
                              },{
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [
                                  { "color": "#dadada" }
                                ]
                              }
                            ],
                        }
                        var mapElement = document.getElementById('fullWidthMap');
                        var map = new google.maps.Map(mapElement, mapOptions);
                        var locations = [
    ['Salt', 'undefined', 'undefined', 'undefined', 'undefined', 40.740697,  -73.988786, 'https://mapbuildr.com/assets/img/markers/solid-pin-black.png']
        ];
                        for (i = 0; i < locations.length; i++) {
                            if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                            if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                            if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
                            marker = new google.maps.Marker({
                                icon: markericon,
                                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                                map: map,
                                title: locations[i][0],
                                desc: description,
                                tel: telephone,
                                email: email,
                                web: web
                            });
                link = '';     }

                }
            });
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-75815870-4', 'auto');
          ga('send', 'pageview');

        </script>
    </body>


<!-- Mirrored from demo.themesease.com/SoftEase/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2016 05:38:04 GMT -->
</html>
