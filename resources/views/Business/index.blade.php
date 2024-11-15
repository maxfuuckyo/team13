<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>聯合國可持續發展目標 (SDGs)</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #f3f4f6, #e1e9f1);
            color: #333;
            overflow-x: hidden;
        }

        header {
            background: linear-gradient(90deg, #0033ff, #ffcc00, #ff66cc);
            color: white;
            padding: 60px 20px;
            text-align: center;
            animation: headerBg 6s infinite alternate;
        }

        @keyframes headerBg {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        main {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        section {
            background: linear-gradient(135deg, #ffffff, #fafafa);
            margin: 20px 0;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        section:hover {
            transform: scale(1.02);
            background: linear-gradient(135deg, #f0f8ff, #e0f7fa);
        }

        h2 {
            color: #ff4081;
            margin-bottom: 15px;
            text-align: center;
            font-size: 1.5rem;
            letter-spacing: 1px;
        }

        .goal-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .goal-item {
            background: linear-gradient(135deg, #4caf50, #66bb6a);
            padding: 20px;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s, background 0.3s;
            position: relative;
            overflow: hidden;
        }

        .goal-item:hover {
            transform: translateY(-10px) scale(1.05);
            background: linear-gradient(135deg, #66bb6a, #4caf50);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: linear-gradient(90deg, #333, #555);
            color: #fff;
            margin-top: 30px;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
            overflow: hidden;
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: linear-gradient(90deg, #3f51b5, #5c6bc0);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ffeb3b;
            color: #333;
            transition: background 0.3s;
        }
    </style>
</head>
<body>
    <header>
        <h1>聯合國可持續發展目標 (SDGs)</h1>
        <p>為了實現更美好的未來，全球共有17項可持續發展目標。</p>
    </header>
    <main>
        <section>
            <h2>本學期可持續發展目標概述</h2>
            <p>可持續發展目標（SDGs）是聯合國於2015年提出的全球性發展目標，旨在消除貧窮、保護地球及確保所有人享有和平與繁榮，本學期抽了一個目標來進行</p>
        </section>
        <section>
            <h2>1項目標</h2>
            <div class="goal-list">
                <div class="goal-item">9. 產業、創新與基礎設施</div>
            </div>
        </section>
        <section>
            <h2>如何參與</h2>
            <p>每個人都可以通過行動和方式來支持這些目標。</p>
        </section>
        <section>
            <h2>內容名單</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>統一編號</th>
                        <th>公司名稱</th>
                        <th>公司地址</th>
                        <th>實收資本額</th>
                        <th>成立日期</th>
                        <th>進口商地址</th>
                        <th>產業代碼</th>
                        <th>進口日期</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($businesses as $Business)
                        <tr>
                            <td>{{$Business->unified_number}}</td>
                            <td>{{$Business->business_name}}</td>
                            <td>{{$Business->business_address}}</td>
                            <td>{{$Business->paid_in_capital}}</td>
                            <td>{{$Business->establishment_date}}</td>
                            <td>{{$Business->imported_business_address}}</td>
                            <td>{{$Business->industry_code_imported}}</td>
                            <td>{{$Business->imported_date}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 本學期可持續發展目標介紹</p>
    </footer>
</body>
</html>

