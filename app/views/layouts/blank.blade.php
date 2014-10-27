<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Dashboard - MacAdmin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  {{ HTML::style('asset/admin/style/bootstrap.css') }}
  {{ HTML::style('asset/admin/style/font-awesome.css') }}
  {{ HTML::style('asset/admin/style/jquery-ui.css') }}
  {{ HTML::style('asset/admin/style/fullcalendar.css') }}
  {{ HTML::style('asset/admin/style/prettyPhoto.css') }}
  {{ HTML::style('asset/admin/style/rateit.css') }}
  {{ HTML::style('asset/admin/style/bootstrap-datetimepicker.min.css') }}
  {{ HTML::style('asset/admin/style/jquery.cleditor.css') }}
  {{ HTML::style('asset/admin/style/bootstrap-switch.css') }}
  {{ HTML::style('asset/admin/style/style.css') }}
  {{ HTML::style('asset/admin/style/widgets.css') }}
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  {{ HTML::script('asset/admin/js/html5shim.js') }}
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

@yield("content")

{{ HTML::script('asset/admin/js/jquery.js') }}
{{ HTML::script('asset/admin/js/bootstrap.js') }}
{{ HTML::script('asset/admin/js/jquery-ui-1.9.2.custom.min.js') }}
{{ HTML::script('asset/admin/js/fullcalendar.min.js') }}
{{ HTML::script('asset/admin/js/jquery.rateit.min.js') }}
{{ HTML::script('asset/admin/js/jquery.prettyPhoto.js') }}


{{ HTML::script('asset/admin/js/excanvas.min.js') }}
{{ HTML::script('asset/admin/js/jquery.flot.js') }}
{{ HTML::script('asset/admin/js/jquery.flot.resize.js') }}
{{ HTML::script('asset/admin/js/jquery.flot.pie.js') }}
{{ HTML::script('asset/admin/js/jquery.flot.stack.js') }}

{{ HTML::script('asset/admin/js/jquery.noty.js') }}
{{ HTML::script('asset/admin/js/themes/default.js') }}
{{ HTML::script('asset/admin/js/layouts/bottom.js') }}
{{ HTML::script('asset/admin/js/layouts/topRight.js') }}
{{ HTML::script('asset/admin/js/layouts/top.js') }}

{{ HTML::script('asset/admin/js/sparklines.js') }}
{{ HTML::script('asset/admin/js/jquery.cleditor.min.js') }}
{{ HTML::script('asset/admin/js/bootstrap-datetimepicker.min.js') }}
{{ HTML::script('asset/admin/js/bootstrap-switch.min.js') }}
{{ HTML::script('asset/admin/js/filter.js') }}
{{ HTML::script('asset/admin/js/custom.js') }}
{{ HTML::script('asset/admin/js/charts.js') }}

</body>
</html>