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
            background-image: url('{{ asset('image/321.jpg') }}');
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        section {
            background: rgba(255, 255, 255, 0.8); /* 半透明背景 */
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
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* 每列最小寬度加大 */
            gap: 20px; /* 增加元素間距 */
        }
        .goal-item {
            background: #e7f4e4;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
            transition: transform 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
            <p>建構民眾可負擔、安全、對環境友善，且具韌性及可永續發展的運輸</p>
        </header>

        <main>
            <section>
                <div class="goal-list">
                    <h2><br>@yield('title')</br></h2>
                    <br>@yield('sdg_theme')</br>
                </div>
            </section>
            <section>
                <h2>參與登記資料</h2>
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