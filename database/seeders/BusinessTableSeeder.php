<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generaterandomstring($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName() {
        $first_name = $this->generaterandomstring(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generaterandomstring(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }

    public function generaterandomareas() {
        $nationalities = array();
        $nationalities[] = '高雄鼓山區';
        $nationalities[] = '高雄旗津區';
        $nationalities[] = '高雄前鎮區';
        $nationalities[] = '高雄龍巖區';
        $nationalities[] = '高雄左營區';
        $nationalities[] = '高雄苓雅區';  
        $nationalities[] = '高雄新興區';
        $nationalities[] = '高雄大寮區';
        $nationalities[] = '高雄大樹區';
        $nationalities[] = '高雄田寮區';
        $nationalities[] = '高雄橋頭區';
        $nationalities[] = '高雄大社區';
        $nationalities[] = '高雄那瑪夏區';
        $nationalities[] = '高雄美濃區';
        $nationalities[] = '高雄蓮池潭區';
        $nationalities[] = '高雄笨港區';

        return $nationalities[rand(0, count($nationalities)-1)];
    }

    public function generateRandomIndustryCode() {
        return str_pad(rand(1000, 9999), 4, '0', STR_PAD_LEFT);
    }

    public function run()
    {
        $firstNames = array('朝陽', '雲影', '空靈', '君曦', '月華', '晴雯', '達志', '俊文', '永信', '凱華', '翰霖', '龍昇', '銘良', '明睿', '天韻', '晨霧', '晨光', '欣月', '甜心', '悅悅', '宇航', '誠宇', '龍飛', '繼榮', '凌風', '墨軒', '智慧', '明朗', '芸馨', '欣妍', '宇宙', '浩瀚', '曉星', '藍天', '世杰', '泰宇', '天宇', '勇輝', '阿倫', '子傑', '尚恩', '昊天', '凱文', '凱羅', '志豪', '俊峰', '喬治', '薇薇', '流雲');
        $lastNames = array('企業行', '工程行', '商行', '資訊', '網路行銷事業社', '機車行', '工作室', '汽車商行', '水電工程行', '管理顧問', '裝潢設計室', '人力工程行', '影像工作室', '科技企業社', '生技商行', '空調工程行', '影印行', '廣告工作室', '廚藝工坊', '西服社', '禮儀社', '葬儀社', '租書店', '花坊', '文化事業社', '行');
        
        $articles = []; 

        for ($i=0; $i<500; $i++)
        {
            $name = $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
            $areas = $this->generaterandomareas();
            $industry_code = $this->generateRandomIndustryCode();
            $capital = rand(1000000, 50000000);
            $random_date = Carbon::now()->subYears(rand(18, 30))
                                      ->subMonths(rand(0, 12))
                                      ->subDays(rand(0, 31));
            $imported_date = $random_date->copy()->startOfDay();
            $establishment_date = $random_date->copy()->startOfDay();

            $articles[] = [
                'unified_number' => rand(1000000, 10000000),
                'business_name' => $name,
                'imported_date' => $imported_date,
                'establishment_date' => $establishment_date,
                'business_address' => $areas,
                'imported_business_address' => $areas,
                'industry_code_imported' => $industry_code,
                'paid_in_capital' => $capital,
                'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
                'updated_at' => Carbon::now()->subMinutes(rand(1, 55))
            ];
        }
        DB::table('business')->insert($articles);
    }

}