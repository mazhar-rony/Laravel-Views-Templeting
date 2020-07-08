<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script type="text/javascript" src="{{ asset('/js/navbar.js') }}"></script>

    <title>@yield('title')</title>

    @yield('style')

</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel Course</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="{{ asset('/') }}">Home</a></li>
            <li><a href="{{ asset('/about_site') }}">About Site</a></li>
            <li><a href="{{ asset('/contact_site') }}">Contact Site</a></li>
            <li><a href="{{ asset('/extra') }}">Extra</a></li>
            <li><a href="{{ asset('/dontshow') }}">Dont Show</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
    
        <!--<a href="/">Home</a>
        <a href="/about_site">About Site</a>
        <a href="/contact_site">Contact Site</a>
        <a href="/extra">Extra</a>
        <a href="/dontshow">Dont Show</a>-->

        @yield('content')

        @section('extrafield')
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
        mollit anim id est laborum.</p>
        @show

        
    </div>

    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  --}}
    
    @yield('navbar')

    {{--  this script is now called from navbar.js file
        <script type="text/javascript">

        $(function(){
            $('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active');
            $('.nav a').click(function(){
                $(this).parent().addClass('active').siblings().removeClass('active');	
            });
        });
    </script>  --}}

</body>
</html>