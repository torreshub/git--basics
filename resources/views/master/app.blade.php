@yield('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <style>
        html, body {
            height: 100%;
        }

        /*body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }*/

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style

</head>


<body>
        <style>body {
                margin: 50px;
            }</style>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('tmlcapp') }}">Title 24 Part 6 Mandatory Lighting Controls</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li {!! activeClass('/')  !!}><a href="{{ url('') }}">Home</a></li>
                <li {!! activeClass('about-us') !!}><a href="{{ url('about-us') }}">About</a></li>
                <li {!! activeClass('contact-us')  !!}><a href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

            @if(Auth::check())
                <li {!! activeClass('users') !!}><a href="{{ url('users') }}">Users</a></li>
            @else
                <li {!! activeClass('users') !!}><a href="{{ url('users') }}">Log In</a></li>
            @endif
            </ul>
        </div>
    </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
