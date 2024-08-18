<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="{{ asset('css/allpage.css') }}" rel="stylesheet">


</head>

<body>

    <div id="app" class="wrapper">
        <header class="container">
            <span class="logo">logo</span>
            <nav>
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about-us">About as</a></li>
                    <li><a href="/capone">Portfolio</a></li>
                    <li><a href="#">News</a></li>
                    <li class="btn"><a href="/contacts">Contacts</a></li>
                </ul>
            </nav>
        </header>
        <!-- Content -->




            @yield('content')

    </div>
    <footer>
        <div class="blocks container">
            <div>
                <span class="logo">logo</span>
                <p>**********</p>
            </div>
            <div>
                <h4>*******</h4>
                <ul>
                    <li>*****</li>
                    <li> ******</li>
                    <li> **********</li>
                    <li> **************</li>
                </ul>
            </div>
            <div>
                <h4>*****************</h4>
                <p>***********************</p>
                <p>0000000</p>
            </div>

        </div>
        <hr>
        <p>********************</p>
    </footer>
</body>

</html>
