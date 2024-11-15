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
            background-color: skyblue;
            color: #000000;
        }

        header {
            background: linear-gradient(to right, rgb(25, 0, 255),gold);
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
            background:rgb(255, 255, 255);
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
            background: #6f00ff;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            transition: transform 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .goal-item:hover {
            transform: translateY(-5px);
            background: #fcf802;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: linear-gradient(to right, rgb(255, 217, 0),rgb(0, 26, 255));
            color: #ffffff;
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
            <h2>本學期可持續發展目標概述</h2>
            <p>可持續發展目標（SDGs）是聯合國於2015年提出的全球性發展目標，旨在消除貧窮、保護地球及確保所有人享有和平與繁榮，本學期從中抽了目標</p>
        </section>
        <section>
            <h2>1項目標</h2>
            <div class="goal-list">
                
                <div class="goal-item">9. 產業、創新與基礎設施</div>
                
            </div>
        </section>
        <section>
            <h2>目標內容</h2>
            <p><br> 9.1　發展高品質、可靠、永續、具韌性的基礎設施，包括區域以及跨境基礎設施，以支援經濟發展和提升人類福祉，並聚焦提供所有人可負擔且公平的管道。</br>

               <br> 9.2　發展包容性與永續的工業，2030年前，各國工業在就業和國內生產毛額（以下簡稱GDP）中的佔比，依據國情顯著增長，尤其最低度開發國家（以下簡稱LDCs）的工業就業和GDP佔比應翻倍成長。</br>
                
               <br> 9.3　增加小型工業及企業取得金融服務的管道，包括可負擔的貸款，並將其併入價值鏈與市場之中，特別是開發中國家的企業。</br>
                
               <br> 9.4　2030年前，所有的國家都應依各自能力採取行動，藉由提高能源使用效率、大幅採用乾淨環保的科技與工業製程，以升級基礎建設、改造工業達成永續。</br>
                
               <br> 9.5　加強所有國家的科學研究、提高工業部門技術能力，特別是開發中國家。包括在2030年前，鼓勵創新並大幅提高研發人員數（以每百萬人增加的比例計算），並提高公私部門的研發支出。</br>
                
               <br> 9.a　透過加強提供非洲國家、LDCs、內陸開發中國家（LLDCs）與小島嶼發展中國家（SIDS）財務、科技、技術支援，促進開發中國家發展永續及韌性的基礎建設。</br>
                
               <br> 9.b　支援開發中國家的國內科技開發、研究與創新，包括創造有利的政策環境，幫助工業多元化發展以及提升商品附加價值。</br>
                
               <br> 9.c　大幅增加取得資訊與通訊技術（ICT）的管道，2020年前在LDCs致力提供普遍且可負擔的網際網路。</br>
            </p>
        </section>
        <section>
            <h2>參考網站</h2>
            <a href="https://futurecity.cw.com.tw/article/1296">未來城市</a>
        </section>
        <section>
            <h2>參與名單</h2>
             <table border="1">
                @foreach ($businesses->slice(0, 20) as $Business)
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
             </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 本學期可持續發展目標介紹</p>
    </footer>
</body>
</html>