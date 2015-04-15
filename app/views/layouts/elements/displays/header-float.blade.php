<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>Trung Thanh Print</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="filCHeXo5XGW5D6Dt5GJdwqcD8KcGWD5ESxCmbei8pQ" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    {{ HTML::style('asset/frontend/style/bootstrap.css') }}
    {{ HTML::style('asset/frontend/style/prettyPhoto.css') }}
    {{ HTML::style('asset/frontend/style/sidebar-nav.css') }}
    {{ HTML::style('asset/frontend/style/flexslider.css') }}
    {{ HTML::style('asset/frontend/style/font-awesome.css') }}
    {{ HTML::style('asset/frontend/style/style.css') }}
    {{ HTML::style('asset/frontend/style/red.css') }}
    <style type="text/css">
        /* bootstrap 3 helpers */

        .navbar-form input, .form-inline input {
            width:auto;
        }



        header {
            padding: 0px;
            margin: 0px;
        }

        #top-menu.affix {
            position: fixed;
            top: 0;
            width: 100%;
            z-index:10;
        }

        .float-side {
          background: white;
          z-index: -10;
        }

        .float-side.affix-top {
            position: static;
        }

        .float-side.affix {
            position: fixed;
            top: 50px;
        }
    </style>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('asset/frontend/img/favicon/favicon.ico') }}">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-22915928-6', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body>
    <header class="masthead">
      <div class="logo">
        <img src="{{ url('asset/frontend/img/logo.jpg') }}" width="100%">
      </div>
    </header> 