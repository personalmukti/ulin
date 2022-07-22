<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">

    <title>{{ $pagename }} | {{ config('app.name') }}</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/dtox-1.0.0/plugins/bootstrap/bootstrap.min.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="assets/dtox-1.0.0/plugins/themify-icons/themify-icons.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="assets/dtox-1.0.0/plugins/slick/slick.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="assets/dtox-1.0.0/plugins/Venobox/venobox.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/dtox-1.0.0/plugins/aos/aos.css">

    <!-- Main Stylesheet -->
    <link href="assets/dtox-1.0.0/css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="assets/dtox-1.0.0/plugins/jQuery/jquery.min.js"></script>

    <!--Favicon-->
    <link rel="shortcut icon" href="assets/dtox-1.0.0/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/dtox-1.0.0/images/favicon.ico" type="image/x-icon">

    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</head>

<body>


    <!-- navigation -->
    @include('landing.partial.navigation')
    <!-- /navigation -->

    @yield('content')

    <!-- footer -->
    @include('landing.partial.footer')
    <!-- /footer -->


    <!-- Bootstrap JS -->
    <script src="assets/dtox-1.0.0/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="assets/dtox-1.0.0/plugins/slick/slick.min.js"></script>
    <!-- venobox -->
    <script src="assets/dtox-1.0.0/plugins/Venobox/venobox.min.js"></script>
    <!-- aos -->
    <script src="assets/dtox-1.0.0/plugins/aos/aos.js"></script>
    <!-- Main Script -->
    <script src="assets/dtox-1.0.0/js/script.js"></script>

    @stack("script")
    @yield("script")

</body>
</html>
