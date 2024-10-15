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
            background:white;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color:red;
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
<body>
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
                <div class="goal-item">1. 消除貧窮</div>
                <div class="goal-item">2. 消除饑餓</div>
                <div class="goal-item">3. 健康與福祉</div>
                <div class="goal-item">4. 優質教育</div>
                <div class="goal-item">5. 性別平等</div>
                <div class="goal-item">6. 清潔水與衛生</div>
                <div class="goal-item">7. 可再生能源</div>
                <div class="goal-item">8. 體面工作與經濟增長</div>
                <div class="goal-item">9. 產業、創新與基礎設施</div>
                <div class="goal-item">10. 減少不平等</div>
                <div class="goal-item">11. 可持續城市與社區</div>
                <div class="goal-item">12. 負責任消費與生產</div>
                <div class="goal-item">13. 氣候行動</div>
                <div class="goal-item">14. 水下生物</div>
                <div class="goal-item">15. 陸地生物</div>
                <div class="goal-item">16. 和平、正義與強大機構</div>
                <div class="goal-item">17. 夥伴關係促進目標實現</div>
            </div>
        </section>
        <section>
            <h2>如何參與</h2>
            <p>每個人都可以通過小行動來支持這些目標，例如節約用水、減少浪費、支持可持續產品等。</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 聯合國可持續發展目標介紹</p>
    </footer>
</body>
</html>