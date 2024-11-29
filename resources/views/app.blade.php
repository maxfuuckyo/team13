<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Include the styles from the original template */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Nunito', sans-serif;
            line-height: 1.6;
            background-color: skyblue;
            color: #000000;
        }

        header {
            background: linear-gradient(to right, rgb(25, 0, 255), gold);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        main {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        section {
            background: rgb(255, 255, 255);
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: red;
            margin-bottom: 10px;
        }

        .goal-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .goal-item {
            background: #6f00ff;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            transition: transform 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .goal-item:hover {
            transform: translateY(-5px);
            background: #fcf802;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: linear-gradient(to right, rgb(255, 217, 0), rgb(0, 26, 255));
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <!-- Login/Logout links --
        
    >@if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif -->

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src={{ URL::asset('image/article-61668f2f7d2f2.jpg') }} width="100%"/>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-2 md:grid-cols-1">
                <div class="p-6">
                    <!-- Include header content -->
                    @include('header')
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <!-- SDG theme content -->
                    @yield('sdg_theme')
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <!-- SDG contents -->
                    @yield('sdg_contents')
                </div>
            </div>
        </div>

        <!-- Include footer -->
        @include('footer')
    </div>
</div>

</body>
</html>
