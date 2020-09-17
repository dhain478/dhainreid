<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Laravel Demo | About</title>
</head>
<body>

    <div class="jumbotron">

        <h1 class="display-4 text-center">About</h1>

        <hr class="my-4">
    </div>

    <nav style="margin-top: -280px; height:58px; padding:15px;" class="navbar-secondary bg-secondary text-right">

        <a class="btn btn-outline-danger" href="{{url('/')}}">
            Home 
        </a> 
        <a class="btn btn-outline-danger" href="{{url('/profile')}}">
            Profile 
        </a> 
        
        <button type="button" class="btn btn-outline-danger active">
            About
        </button>
 
    </nav>
</body>
</html>