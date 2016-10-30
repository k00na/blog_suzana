<!DOCTYPE HTML>
<html lang="en-US">
    @include('partials._head')

	

    <body class="animat">
        <div id="page">
            @include('partials._nav')

            @yield('content')

            
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 text-center">
                            <div class="footLogo">
                                <a href="#">
                                    <img src="images/logo2.png" alt="">
                                </a>
                            </div>
                            <p class="copyrightText">Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam et purus at lectus tempus <span>Copyright © 2016 Suzana Zera. Vse pravice pridržane</span></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Include All JS -->
        @include('partials._scripts')
        
    </body>
</html>