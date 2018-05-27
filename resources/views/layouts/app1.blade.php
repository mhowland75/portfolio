<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/portfolio.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/ionicons.css') }}" rel="stylesheet">
    
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <!-- icon databace -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <script>
$(document).ready(function(){
    $("#button").click(function(){
        $("#navr").fadeToggle();
    });
});
</script>
    
    <div id="app">
        <div id="button">
        <i class="icon ion-drag"></i>
        
    </div>
    <div id="navr">
        <div>
            <a href="/"><i class="icon ion-home"></i><br>Home</a>
            <a href="/portfolio"><i class="icon ion-easel"></i><br>Portfolio</a>
            <a href="/services"><i class="icon ion-gear-b"></i><br>Services</a>
            <a href="/bibliography"><i class="icon ion-eye"></i><br>About</a><br>
            <a href="/contact"><i class="icon ion-email"></i><br>Contact</a>
        </div>
    </div>
            
        @yield('content')
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
