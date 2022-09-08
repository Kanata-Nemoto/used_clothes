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
            'address' => '東京都世田谷区北沢２丁目３５−９ 大竹ビル 2F',
            'phone_number' => '03-5738-8454',
            'business_hours' => '月～日 12:00 ~ 20:00',
            'price_range' => '￥5000 ~',
            'feature' => '一点ものが多い、個性のあるデザイン',
            'instagram' => 'https://www.instagram.com/caka_shimokitazawa/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => '35.66372992897464',
            'lng' => '139.66810707930617',
        ]);
        DB::table('shops')->insert([
            'id' => '2',
            'name' => 'フォーカス',
            'address' => '小清水ビル 1階, ２丁目-３５-９ 北沢 世田谷区 東京都 155-0031',
            'phone_number' => '03-6407-9088',
            'business_hours' => '月～日 12:00 ~ 20:00',
            'price_range' => '￥1000 ~',
            'feature' => '派手なデザイン',
            'instagram' => 'https://www.instagram.com/used_focus/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lat' => '35.663804457507446',
            'lng' => '139.6680286013757',
        ]);
    }
}
