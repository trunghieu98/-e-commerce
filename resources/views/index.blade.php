<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
 
    <link rel="stylesheet" href="./css/checkout.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">

</head>

<body>

    <!--header-->
  @include('header')
    <!--header-->

    <!-- NAVIGATION -->
   <!-- @include('category') -->
    <!-- /NAVIGATION -->

    <!-- /Slideshow-->
    @yield('slide')
    <!-- // SlideShow-->

    <!-- //main -->
    @yield('main')
    <!--main //-->

    <!--//Footer-->
  @include('footer')
    <!--//Footer-->
    <script src="./Bootstrap/js/jquery.min.js"></script>
    <script src="./Bootstrap/js/bootstrap.min.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>