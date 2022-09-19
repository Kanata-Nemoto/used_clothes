<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'id' => '1',
            'name' => 'Caka',
            'address' => '東京都世田谷区北沢２丁目３５-９ 大竹ビル ２F',
            'phone_number' => '03-5738-8454',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥８０００～',
            'feature' => '一点ものが多い、個性のあるデザイン',
            'instagram' => 'https://www.instagram.com/caka_shimokitazawa/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66372992897464,
            'lng' => 139.66810707930617,
        ]);
        DB::table('shops')->insert([
            'id' => '2',
            'name' => 'フォーカス',
            'address' => '小清水ビル １階, ２丁目-３５-９ 北沢 世田谷区 東京都 １５５-００３１',
            'phone_number' => '03-6407-9088',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥１０００～',
            'feature' => '派手なデザイン',
            'instagram' => 'https://www.instagram.com/used_focus/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.663804457507446,
            'lng' => 139.6680286013757,
        ]);
        DB::table('shops')->insert([
            'id' => '3',
            'name' => 'iot 下北沢',
            'address' => '東京都世田谷区北沢２丁目３３−３ 下北沢２３３ビル F１',
            'phone_number' => '03-6823-4407',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥６０００～',
            'feature' => '個性のあるデザイン',
            'instagram' => 'https://www.instagram.com/iot_tokyo/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.6629176673393,
            'lng' => 139.66878309833152,
        ]);
        DB::table('shops')->insert([
            'id' => '4',
            'name' => 'GASLAMP SQUARE 下北沢１号店',
            'address' => '東京都世田谷区北沢２丁目２４−１２ サンモニーク下北沢 １階',
            'phone_number' => '',
            'business_hours' => '月～金 １２：００ ～ ２０：００，土日 １１：００ ～ ２０：００',
            'price_range' => '￥１０００～',
            'feature' => '古着初心者おすすめ、コスパ〇',
            'instagram' => 'https://www.instagram.com/gaslampsquareshimokitazawa/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66236850950631,
            'lng' => 139.66821983454895,
        ]);
         DB::table('shops')->insert([
            'id' => '5',
            'name' => 'シグナル',
            'address' => '東京都世田谷区北沢２丁目３６−２ ヒルズ下北沢',
            'phone_number' => '03-6407-8322',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥６０００～',
            'feature' => 'きれいめな古着、カラフル',
            'instagram' => 'https://www.instagram.com/signal_shimokitazawa/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66327531323086,
            'lng' => 139.6674381773045,
        ]);
        DB::table('shops')->insert([
            'id' => '6',
            'name' => 'Iroha',
            'address' => '東京都世田谷区北沢２丁目２９−１４',
            'phone_number' => '03-6407-0829',
            'business_hours' => '月～金 １３：００ ～ ２０：００，土日 １２：００ ～ ２０：００',
            'price_range' => '￥５０００～',
            'feature' => 'きれいめな古着、店内の雰囲気〇',
            'instagram' => 'https://www.instagram.com/iroha_tokyo/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66325880270702,
            'lng' => 139.6670535202379,
        ]);
        DB::table('shops')->insert([
            'id' => '7',
            'name' => 'フロリダ 下北沢店',
            'address' => '東京都世田谷区北沢２丁目２９−２ Ｂ１Ｆ フェニキアビル',
            'phone_number' => '070-1483-5965',
            'business_hours' => '月～金 １２：００ ～ ２１：００，土日 １１：００ ～ ２１：００',
            'price_range' => '￥３０００～',
            'feature' => '気軽に買える価格設定、若者に人気',
            'instagram' => 'https://www.instagram.com/florida_shimokitazawa/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66294639153243,
            'lng' => 139.6667850416419,
        ]);
        DB::table('shops')->insert([
            'id' => '8',
            'name' => 'BIG TIME 下北沢',
            'address' => '東京都世田谷区北沢２丁目２６−１５ １F・２F',
            'phone_number' => '050-3803-2253',
            'business_hours' => '月～木 １１：００ ～ ２０：００，金～日 １１：００ ～ ２１：００',
            'price_range' => '￥１０００～',
            'feature' => '品揃え多い、コスパ〇',
            'instagram' => 'https://www.instagram.com/big_time_shimokitazawa/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.6626875420995,
            'lng' => 139.66645660564268,
        ]);
        DB::table('shops')->insert([
            'id' => '9',
            'name' => 'meadow by FLAMINGO',
            'address' => '東京都世田谷区北沢２丁目２６−１４ 下北沢Ｃｏｏビル Ａ号室',
            'phone_number' => '070-1483-5965',
            'business_hours' => '月～金 １２：００ ～ ２１：００，土日 １１：００ ～ ２１：００',
            'price_range' => '￥８０００～',
            'feature' => 'きれいめな古着、リメイク品多い',
            'instagram' => 'https://www.instagram.com/meadow_by_flamingo/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66254661699867,
            'lng' => 139.66636790760214,
        ]);
        DB::table('shops')->insert([
            'id' => '10',
            'name' => 'MICMO 下北沢２号店',
            'address' => '東京都世田谷区北沢２丁目２４−６',
            'phone_number' => '03-6407-1299',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥２０００～',
            'feature' => 'コスパ〇、古着初心者おすすめ',
            'instagram' => 'https://www.instagram.com/micmo_shimokita.2/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66225787743048,
            'lng' => 139.6676305541305,
        ]);
        DB::table('shops')->insert([
            'id' => '11',
            'name' => 'MICMO 下北沢１号店',
            'address' => '東京都世田谷区北沢２丁目２６−２１ エルフォアシティ下北沢 201',
            'phone_number' => '03-3465-3789',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥１０００～',
            'feature' => 'コスパ〇、古着初心者おすすめ',
            'instagram' => 'https://www.instagram.com/micmo_shimokita/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.662581884217964,
            'lng' => 139.66689629912264,
        ]);
        DB::table('shops')->insert([
            'id' => '12',
            'name' => 'MICMO 下北沢３号店',
            'address' => '東京都世田谷区北沢２丁目２４−８',
            'phone_number' => '',
            'business_hours' => '月～日 １０：３０ ～ ２０：００',
            'price_range' => '￥１０００～',
            'feature' => 'コスパ〇、古着初心者おすすめ',
            'instagram' => 'https://www.instagram.com/micmo_shimokita3part2/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66243254108618,
            'lng' => 139.6677500792627,
        ]);
        DB::table('shops')->insert([
            'id' => '13',
            'name' => 'MICMO 下北沢４号店',
            'address' => '東京都世田谷区北沢２丁目３０−２',
            'phone_number' => '',
            'business_hours' => '月～日 １１：００ ～ ２０：００',
            'price_range' => '￥１０００～',
            'feature' => 'コスパ〇、古着初心者おすすめ',
            'instagram' => 'https://www.instagram.com/micmo_shimokita4/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66273511202862,
            'lng' => 139.6675375060421,
        ]);
        DB::table('shops')->insert([
            'id' => '14',
            'name' => 'MICMO 下北沢５号店',
            'address' => '東京都世田谷区北沢２丁目１４−５ 下北沢イスズビル ２Ｆ',
            'phone_number' => '',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥１０００～',
            'feature' => 'コスパ〇、古着初心者おすすめ',
            'instagram' => 'https://www.instagram.com/micmo_shimokita/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66012538007886,
            'lng' => 139.6674694963306,
        ]);
        DB::table('shops')->insert([
            'id' => '15',
            'name' => 'MICMO 下北沢６号店',
            'address' => '東京都世田谷区北沢２丁目１５−１ 下北沢コマーシャルビル 2F',
            'phone_number' => '',
            'business_hours' => '月～日 １２：００ ～ ２０：００',
            'price_range' => '￥１０００～',
            'feature' => 'コスパ〇、古着初心者おすすめ',
            'instagram' => 'https://www.instagram.com/micmo_shimokita/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.65945080136012,
            'lng' => 139.66734368974858,
        ]);
        DB::table('shops')->insert([
            'id' => '16',
            'name' => 'フラミンゴ 下北沢店',
            'address' => '東京都世田谷区北沢２丁目２５−１２ リサビル 1Ｆ',
            'phone_number' => '',
            'business_hours' => '月～金 １２：００ ～ ２１：００，土日 １１：００ ～ ２１：００',
            'price_range' => '￥５０００～',
            'feature' => '若者に人気、古着初心者おすすめ',
            'instagram' => 'https://www.instagram.com/flamingo_shimokitazawa/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => 35.66269545633684,
            'lng' => 139.66705910183197,
        ]);
    }
}
