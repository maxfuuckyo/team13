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
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Nunito', 'Arial', sans-serif;
            line-height: 1.6;
            background-color: white;
            color: #333;
        }
        header {
            background: linear-gradient(to right, purple, gold);
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
            background: white;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
            background: #e7f4e4;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            transition: transform 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .goal-item:hover {
            transform: translateY(-5px);
            background: #c8e6c9;
        }
        footer {
            text-align: center;
            padding: 15px;
            background: #333;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <header>
            <h1>聯合國可持續發展目標 (SDGs)</h1>
            <p>為了實現更美好的未來，全球共有17項可持續發展目標。</p>
        </header>

        <main>
            <section>
                <h2>可持續發展目標概述</h2>
                <p>可持續發展目標（SDGs）是聯合國於2015年提出的全球性發展目標，旨在消除貧窮、保護地球及確保所有人享有和平與繁榮。</p>
            </section>
            <section>
                <h2>17項目標</h2>
                <div class="goal-list">
                    @yield('sdg_theme')
                </div>
            </section>
            <section>
                <h2>如何參與</h2>
                <p>每個人都可以通過小行動來支持這些目標，例如節約用水、減少浪費、支持可持續產品等。</p>
                @yield('sdg_contents')
            </section>
        </main>

        <footer>
            <p>&copy; 2024 聯合國可持續發展目標介紹</p>
        </footer>
    </div>
</div>
</body>
</html>