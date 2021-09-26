<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="http://localhost:8888/bookstore/webroot/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="http://localhost:8888/bookstore/webroot/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="http://localhost:8888/bookstore/webroot/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="http://localhost:8888/bookstore/webroot/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="http://localhost:8888/bookstore/webroot/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="http://localhost:8888/bookstore/webroot/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="http://localhost:8888/bookstore/webroot/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="http://localhost:8888/bookstore/webroot/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <?= $this->element('admin/admin_nav'); ?>
    <div class="page">
      <!-- navbar-->
      <?= $this->element('admin/admin_header'); ?>
      <!-- Counts Section -->
      
      <?= $this->fetch('content'); ?>
      <?= $this->element('admin/admin_footer'); ?>
    </div>
    <!-- JavaScript files-->
    <script src="http://localhost:8888/bookstore/webroot/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:8888/bookstore/webroot/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost:8888/bookstore/webroot/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="http://localhost:8888/bookstore/webroot/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="http://localhost:8888/bookstore/webroot/vendor/chart.js/Chart.min.js"></script>
    <script src="http://localhost:8888/bookstore/webroot/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="http://localhost:8888/bookstore/webroot/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://localhost:8888/bookstore/webroot/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="http://localhost:8888/bookstore/webroot/js/front.js"></script>
  </body>
</html>