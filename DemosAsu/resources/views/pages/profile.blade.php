<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Laravel Demo | Profile</title>
</head>
<body>

    <div class="jumbotron jumbotron-fluid">

            <h1 class="display-4 text-center">Profile</h1>

            <hr class="my-4">

    </div>

    <nav style="margin-top: -280px; height:58px; padding:15px;" class="navbar-dark bg-dark right">
    
        <a class="btn btn-outline-danger" href="{{url('/')}}">
            Home
        </a>

        <button class="btn btn-outline-danger active">
            Profile
        </button> 

        <a class="btn btn-outline-danger" href="{{url('/about')}}">
            About
        </a>

    </nav>

</body>
</html>