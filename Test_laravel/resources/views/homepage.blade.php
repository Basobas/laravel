<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <style>
        html, body {
            background-color: #fff;
            padding: 0 25px;
            color: #000000;
            font-family: 'Raleway';
            font-weight: 600;
            height: 100vh;
            margin: 0;
            font-size: 12px;

        }

        .full-height {
            height: 100vh;
        }



        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }


        .links > a {
            color: #000000;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

      </style>

</head>
<body>


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        </div>
    @endif


    <h1>My Homepage</h1>
    @if ($var1 == 'Hamburger')
        I Love Hamburgers<br>
    @endif

    {{ $var1 }}<br>
    {{ $var2 }}<br>
    {{ $var3 }}<br>

    <ul>
        @foreach($orders as $order)
            <li>{{ $order->name }}</li>
        @endforeach
    </ul>

</body>
</html>
