<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juegos de registrados</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/tooplate-style.css') }}">
    <!-- <link rel="stylesheet"  href="{{asset('asset/css/bootstrap.min.css')}}">

    <link rel="stylesheet"  href="{{asset('asset/css/font-awesome.css')}}">

    <link rel="stylesheet"  href="{{asset('asset/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/tooplate-artxibition.css')}}">
 -->
    <script>
        document.documentElement.className="js";
        var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};
        supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");
    </script>  
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Gamers de Nivel.</h1>
                            <p>¡No te preocupes, solo un último nivel más y luego vamos a dormir!</p>        
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                @if (Route::has('login'))
                                    @auth
                                        <div class="grid__item" id="home-link">
                                            <div class="product">
                                                <div class="tm-nav-link">
                                                    <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                                    <form action="{{ url('/home') }}" method="GET">
                                                        <button type="submit" class="tm-nav-text btn-link" style="background-color: transparent; border: none; cursor: pointer;">Home</button>
                                                    </form>       
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="grid__item">
                                            <div class="product">
                                                <div class="tm-nav-link">
                                                    <i class="fas fa-sign-in-alt fa-3x tm-nav-icon"></i>
                                                    <form action="{{ route('login') }}" method="GET">
                                                        <button type="submit" class="tm-nav-text btn-link" style="background-color: transparent; border: none; cursor: pointer;">Log in</button>
                                                    </form>            
                                                </div>
                                            </div>
                                        </div>
                                        @if (Route::has('register'))
                                            <div class="grid__item">
                                                <div class="product">
                                                    <div class="tm-nav-link">
                                                        <i class="fas fa-user-plus fa-3x tm-nav-icon"></i>
                                                        <form action="{{ route('register') }}" method="GET">
                                                            <button type="submit" class="tm-nav-text btn-link" style="background-color: transparent; border: none; cursor: pointer;">Register</button>
                                                        </form>            
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p class="small tm-copyright-text">Trabajo realizado &copy; <span class="tm-current-year">2024</span> Por Jesus Alejandro.
                Proyecto Laravel, Boostrap.</p>
            </footer>
        </div>
<!-- 
        <div class="show-events-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-show-events owl-carousel">
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-01.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-01.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <div class="amazing-venues">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-content">
                        <h4>Three Amazing Venues for events</h4>
                        <p>ArtXibition Event Template is brought to you by Tooplate website and it included total 7 HTML pages. 
                        These are <a href="index.html">Homepage</a>, <a href="about.html">About</a>, 
                        <a href="rent-venue.html">Rent a venue</a>, <a href="shows-events.html">shows &amp; events</a>, 
                        <a href="event-details.html">event details</a>, <a href="tickets.html">tickets</a>, and <a href="ticket-details.html">ticket details</a>. 
                        You can feel free to modify any page as you like. If you have any question, please visit our <a href="https://www.tooplate.com/contact" target="_blank">Contact page</a>.</p>
                        <br>
                        <p>You can use this event template for your commercial or business website. You are not permitted to redistribute this template ZIP file on any template download website. If you need the latest HTML templates, you may visit <a href="https://www.toocss.com/" target="_blank">Too CSS</a> website that features a great collection of templates in different categories.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <h5><i class="fa fa-map-marker"></i> Visit Us</h5>
                        <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                        <div class="text-button"><a href="show-events-details.html">Need Directions? <i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="map-image">
        <img src="assets/images/map-image.jpg" alt="Maps of 3 Venues">
    </div>


    
    <div class="venue-tickets">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Venues & Tickets</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="ticket-details.html">Purchase Tickets</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>Radio City Musical Hall</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>250</li>
                                    <li><i class="fa fa-user"></i>500</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$45</em></span>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-02.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="ticket-details.html">Purchase Tickets</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>Madison Square Garden</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>450</li>
                                    <li><i class="fa fa-user"></i>650</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$55</em></span>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-03.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="ticket-details.html">Purchase Tickets</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>Royce Hall</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>450</li>
                                    <li><i class="fa fa-user"></i>750</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$65</em></span>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
    <div class="coming-events">
        <div class="left-button">
            <div class="main-white-button">
                <a href="shows-events.html">Discover More</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-01.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Radio City Musical Hall</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Tuesday: 15:30-19:30</li>
                                <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-02.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Madison Square Garden</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Wednesday: 08:00-14:00</li>
                                <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-03.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Royce Hall</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Thursday: 09:00-23:00</li>
                                <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-9">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-3">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>Sunny Hill Festival Address</h4>
                        <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Outreach</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Open Hours</h4>
                        <ul>
                            <li>Mon to Fri: 10:00 AM to 8:00 PM</li>
                            <li>Sat - Sun: 11:00 AM to 4:00 PM</li>
                            <li>Holidays: Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <p>São Conrado, Rio de Janeiro</p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <p class="copyright">Copyright 2021 ArtXibition Company 
                    
                    			<br>Design: <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span>Art<em>Xibition</em></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu">
                                    <ul>
                                        <li><a href="index.html" class="active">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="rent-venue.html">Rent Venue</a></li>
                                        <li><a href="shows-events.html">Shows & Events</a></li> 
                                        <li><a href="tickets.html">Tickets</a></li> 
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="assets/js/jquery-2.1.0.min.js"></script>


    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    
    <script src="assets/js/custom.js"></script>

  </body>
    </div>


 -->
    <!-- load JS -->
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/anime.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');
            }
        }

        $(function(){
            setupFooter();
            $(window).resize(function(){
                setupFooter();
            });
            $('.tm-current-year').text(new Date().getFullYear());
        });
    </script>
</body>
</html>
