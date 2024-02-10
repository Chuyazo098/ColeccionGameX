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
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>  
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
                                                    <button onclick="window.location.href='{{ url('/home') }}'" class="tm-nav-text btn-link">Home</button>
                                                    <div class="product__bg"></div>        
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="grid__item">
                                            <div class="product">
                                                <div class="tm-nav-link">
                                                    <i class="fas fa-sign-in-alt fa-3x tm-nav-icon"></i>
                                                    <button onclick="window.location.href='{{ route('login') }}'" class="tm-nav-text btn-link">Log in</button>
                                                    <div class="product__bg"></div>             
                                                </div>
                                            </div>
                                        </div>
                                        @if (Route::has('register'))
                                            <div class="grid__item">
                                                <div class="product">
                                                    <div class="tm-nav-link">
                                                        <i class="fas fa-user-plus fa-3x tm-nav-icon"></i>
                                                        <button onclick="window.location.href='{{ route('register') }}'" class="tm-nav-text btn-link">Register</button>
                                                        <div class="product__bg"></div>             
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
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2018</span> Your Company.
                Layout: Tooplate</p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
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
