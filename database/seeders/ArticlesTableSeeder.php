<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'unified_number' => '145483',
                'business_name' => '春誠企業行',
                'business_address' => '高雄市前鎮區和平二路１４０號１樓',
                'paid_in_capital' => 200000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市前鎮區竹內里和平二路１４０號１樓',
                'industry_code_imported' => '471114',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '147068',
                'business_name' => '琮裕工程行',
                'business_address' => '高雄市小港區南北路１巷１之５號',
                'paid_in_capital' => 300000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市小港區店鎮里南北路１巷１之５號',
                'industry_code_imported' => '381113,381111',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '147601',
                'business_name' => '弘軒商行',
                'business_address' => '高雄市大樹區中興東路９號１樓',
                'paid_in_capital' => 200000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市大樹區檨腳里４鄰中興東路９號',
                'industry_code_imported' => '471114',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '166000',
                'business_name' => '迪釩資訊',
                'business_address' => '高雄市前鎮區瑞興街９２號１樓',
                'paid_in_capital' => 20000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市前鎮區瑞興里瑞興街９２號１樓',
                'industry_code_imported' => '483111',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '171209',
                'business_name' => '侑軒網路行銷事業社',
                'business_address' => '高雄市鳳山區八德路二段１４５號１８樓',
                'paid_in_capital' => 200000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市鳳山區文德里八德路２段１４５號１８樓',
                'industry_code_imported' => '487199',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '185007',
                'business_name' => '千田機車行',
                'business_address' => '高雄市大寮區光明路一段１０５９號',
                'paid_in_capital' => 36000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市大寮區過溪里光明路１段１０５９號',
                'industry_code_imported' => '484314,484316,959100',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '189405',
                'business_name' => '紅毛港馬賽克鑲嵌工作室',
                'business_address' => '高雄市鳳山區福祥街６３號５樓',
                'paid_in_capital' => 1000000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市鳳山區福祥里福祥街６３號５樓',
                'industry_code_imported' => '461,312,740,100,711,000,000,000',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '194505',
                'business_name' => '明道汽車商行',
                'business_address' => '高雄市鳳山區自由路２２４號１２樓之３',
                'paid_in_capital' => 100000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市鳳山區中和里自由路２２４號１２樓之３',
                'industry_code_imported' => '820999,782000,669999',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '196503',
                'business_name' => '光明修工作室',
                'business_address' => '高雄市苓雅區中正一路２７０號１樓',
                'paid_in_capital' => 30000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市苓雅區正言里中正一路２７０號１樓',
                'industry_code_imported' => '969099',
                'imported_date' => '2024-09-26',
            ],
            [
                'unified_number' => '198220',
                'business_name' => '沅大工程行',
                'business_address' => '高雄市三民區鼎富路１９巷１７號１樓',
                'paid_in_capital' => 200000,
                'establishment_date' => '2024-09-26',
                'imported_business_address' => '高雄市三民區鼎盛里鼎富路１９巷１７號１樓',
                'industry_code_imported' => '434011',
                'imported_date' => '2024-09-26',
            ],
        ];

        DB::table('Articles')->insert($articles);
    }

}
