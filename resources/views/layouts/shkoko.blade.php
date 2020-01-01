<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>{{ config('app.name') }} Restaurant</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('fonts/beyond_the_mountains-webfont.css') }}" type="text/css"/>

        <!-- Stylesheets -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/ionicons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        @yield('css')
</head>
<body>
  @yield('content')


  <footer class="pb-50  pt-70 pos-relative">
    <div class="pos-top triangle-bottom"></div>
    <div class="container-fluid">
            <a href="index.html"><img src="images/logo-white.png" alt="Logo"></a>

            <div class="pt-30">
                    <p class="underline-secondary"><b>Address:</b></p>
                    <p>481 Creekside Lane Avila Beach, CA 93424 </p>
            </div>

            <div class="pt-30">
                    <p class="underline-secondary mb-10"><b>Phone:</b></p>
                    <a href="tel:+53 345 7953 32453 ">+53 345 7953 32453 </a>
            </div>

            <div class="pt-30">
                    <p class="underline-secondary mb-10"><b>Email:</b></p>
                    <a href="mailto:yourmail@gmail.com"> yourmail@gmail.com</a>
            </div>

            <ul class="icon mt-30">
                    <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
            </ul>

            <p class="color-light font-9 mt-50 mt-sm-30"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div><!-- container -->
  </footer>

  <!-- SCIPTS -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/swiper.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/progressbar.min.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  @yield('js')

</body>
</html>