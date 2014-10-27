<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trung Thanh Print</title>

    {{ HTML::style('asset/css/bootstrap.min.css') }}
    {{ HTML::style('asset/css/main.css')}}
</head>

<body>

<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                    <li>{{ link_to_action('UsersController@getLogin', trans('labels.Login') ) }}</li>
                    <li>{{ link_to_action('UsersController@getForgotPassword', trans('labels.Forgot Password') ) }}</li>
                @else
                    <li>{{ link_to_action('UsersController@getLogout', trans('labels.Logout') ) }}</li>
                @endif
            </ul>
        </div>
    </div>
</div>

<div class="container">
    @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
    @endif

    @yield('content')

</div>

<footer class="navbar navbar-default navbar-fixed-bottom">
        Trung Thanh Print
</footer>
</body>
</html>