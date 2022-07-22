<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="marcio de Jesus" content="">

    <title>@yield('title') </title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <!-- Css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">



  <!--- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">



</head>

<body  data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">



    <!-- ============================================================= MODAL ============================================================= -->
    @include('frontend.common.modal_index')

    <!-- ============================================================= MODAL : END============================================================= -->


    <!-- ============================================================= NOTIFICATION TOAST ============================================================= -->
    @include('frontend.common.notification_toast')

    <!-- ============================================================= NOTIFICATION TOAST : END============================================================= -->



    <!-- ============================================== HEADER ============================================== -->
    @include('frontend.body.header')

    <!-- ============================================== HEADER : END ============================================== -->



    <!-- ============================================================= CONTENT ============================================================= -->
    @yield('content')

    <!-- ============================================================= CONTENT : END============================================================= -->



    <!-- ============================================================= BRAND ============================================================= -->
    @include('frontend.body.brands')

    <!-- ============================================================= BRAND : END============================================================= -->



    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend.body.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->





    <!-- Custom JavaScript File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


    <!-- Jquery.min.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>





      <!--- ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</body>

</html>
