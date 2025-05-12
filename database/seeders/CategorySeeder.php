<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::table('categories')->insert([
            'category_id' =>
            'category_name' =>
            'created_at' =>
            'updated_at' =>
        ]); */

        DB::table('categories')->insert([
            'category_id' => '22',
            'category_name' => 'パン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '22-434',
            'category_name' => '食パン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '33',
            'category_name' => '卵',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-275',
            'category_name' => '牛肉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-276',
            'category_name' => '豚肉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-277',
            'category_name' => '鶏肉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-278',
            'category_name' => 'ひき肉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-68',
            'category_name' => 'ベーコン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-66-50',
            'category_name' => 'ソーセージ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-66-50',
            'category_name' => 'ウインナー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-67',
            'category_name' => 'ハム',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '10-67-1491',
            'category_name' => '生ハム',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);



        DB::table('categories')->insert([
            'category_id' => '11-70',
            'category_name' => 'サーモン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-70',
            'category_name' => '鮭',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-71',
            'category_name' => 'いわし',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-72',
            'category_name' => 'さば',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-73',
            'category_name' => 'あじ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-74',
            'category_name' => 'ぶり',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-75',
            'category_name' => 'さんま',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-76',
            'category_name' => 'たい',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-77',
            'category_name' => 'まぐろ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-78-465',
            'category_name' => 'さわら',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-78-471',
            'category_name' => 'しらす',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-78-324',
            'category_name' => 'かつお',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-78-471',
            'category_name' => 'ししゃも',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-443',
            'category_name' => 'たら',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-80',
            'category_name' => 'いか',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-81',
            'category_name' => 'たこ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-79',
            'category_name' => 'えび',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-82-60',
            'category_name' => 'あさり',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-82-61',
            'category_name' => 'ほたて',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-82-478',
            'category_name' => 'しじみ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-83',
            'category_name' => 'かに',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-444',
            'category_name' => '牡蠣',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '11-445',
            'category_name' => '明太子',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-100-10',
            'category_name' => 'たけのこ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-100-2',
            'category_name' => 'レタス',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-100-111',
            'category_name' => 'アスパラ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-100-845',
            'category_name' => 'さやえんどう',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-100-21',
            'category_name' => 'えんどう豆',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-100-844',
            'category_name' => 'グリーンピース',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-100-846',
            'category_name' => 'スナップえんどう',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-31',
            'category_name' => 'ゴーヤ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-315',
            'category_name' => 'ズッキーニ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-300',
            'category_name' => 'ピーマン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-322',
            'category_name' => 'オクラ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-509',
            'category_name' => 'モロヘイヤ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-22',
            'category_name' => 'いんげん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-456',
            'category_name' => 'パプリカ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-24',
            'category_name' => '枝豆',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-101-422',
            'category_name' => 'とうもろこし',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-102-15',
            'category_name' => 'れんこん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-102-18',
            'category_name' => '山芋',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-102-847',
            'category_name' => '長芋',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-102-319',
            'category_name' => 'ちんげん菜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-103-308',
            'category_name' => '里芋',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-103-3',
            'category_name' => '水菜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-103-4',
            'category_name' => 'にら',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-103-314',
            'category_name' => 'セロリ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-103-8',
            'category_name' => 'ねぎ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-447',
            'category_name' => 'なす',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-448',
            'category_name' => 'かぼちゃ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-449',
            'category_name' => '大根',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-450',
            'category_name' => 'きゅうり',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-97',
            'category_name' => 'じゃがいも',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-452',
            'category_name' => 'さつまいも',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-98',
            'category_name' => 'キャベツ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-453',
            'category_name' => '白菜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-454',
            'category_name' => 'トマト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-99',
            'category_name' => 'もやし',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-456',
            'category_name' => '小松菜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-457',
            'category_name' => 'ほうれん草',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-455',
            'category_name' => 'ごぼう',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-451',
            'category_name' => 'アボカド',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-96',
            'category_name' => 'たまねぎ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-458',
            'category_name' => 'ブロッコリー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-95',
            'category_name' => 'にんじん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105',
            'category_name' => 'きのこ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105-75',
            'category_name' => 'しいたけ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105-339',
            'category_name' => 'エリンギ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105-78',
            'category_name' => 'えのき',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105-76',
            'category_name' => 'しめじ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105-77',
            'category_name' => 'まいたけ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105-337',
            'category_name' => 'まつたけ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-105-79',
            'category_name' => 'なめこ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-107-448',
            'category_name' => 'しそ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-107-448',
            'category_name' => '大葉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '12-107-9',
            'category_name' => 'にんにく',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-108-490',
            'category_name' => 'ちくわ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-108-107',
            'category_name' => 'はんぺん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-108-528',
            'category_name' => 'かまぼこ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-108-530',
            'category_name' => 'カニカマ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-109-843',
            'category_name' => 'ツナ缶',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-113-336',
            'category_name' => 'のり',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-479',
            'category_name' => 'マカロニ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-482',
            'category_name' => 'チーズ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-483',
            'category_name' => 'ヨーグルト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-111',
            'category_name' => 'こんにゃく',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-112',
            'category_name' => 'しらたき',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-113',
            'category_name' => '海藻',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '13-484',
            'category_name' => '漬物',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '16-152',
            'category_name' => 'うどん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '16-153',
            'category_name' => 'そば',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '16-154',
            'category_name' => 'そうめん',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '19-464',
            'category_name' => 'オリーブオイル',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '19-710',
            'category_name' => 'ごま油',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '27-265',
            'category_name' => 'お茶',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '30-307',
            'category_name' => 'カレー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '30-315',
            'category_name' => '豆腐',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '31-327',
            'category_name' => 'ミートボール',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '31-327',
            'category_name' => '肉団子',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '31-333',
            'category_name' => 'チャーシュー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'category_id' => '31-333',
            'category_name' => '焼き豚',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        

        
    }
}
