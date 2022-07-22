<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Landing | {{ config('app.name') }}</title>

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

  <!--Favicon-->
  <link rel="shortcut icon" href="assets/dtox-1.0.0/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/dtox-1.0.0/images/favicon.ico" type="image/x-icon">

</head>

<body>


<!-- navigation -->
@include('landing.partial.navigation')
<!-- /navigation -->

<!-- hero area -->
@include('landing.partial.hero')
<!-- /hero-area -->

<!-- feature -->
@include('landing.partial.feature')
<!-- /feature -->

<!-- marketing -->
@include('landing.partial.marketing')
<!-- /marketing -->

<!-- service -->
@include('landing.partial.service')
<!-- /service -->

<!-- team -->
@include('landing.partial.team')
<!-- /team -->

<!-- pricing -->

<!-- /pricing -->

<!-- client logo slider -->
@include('landing.partial.client')
<!-- /client logo slider -->

<!-- newsletter -->
@include('landing.partial.newsletter')
<!-- /newsletter -->

<!-- footer -->
@include('landing.partial.footer')
<!-- /footer -->

<!-- jQuery -->
<script src="assets/dtox-1.0.0/plugins/jQuery/jquery.min.js"></script>
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

</body>
</html>
