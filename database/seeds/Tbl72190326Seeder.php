<?php

use Illuminate\Database\Seeder;

class Tbl72190326Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_72190326')->insert([
            'article_title' => 'Teknik dan Strategi Sukses dalam Bulutangkis',
            'article_date' => '2023-06-01',
            'article_text' => 'Mengoptimalkan Performa dan Keterampilan....',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_72190326')->insert([
            'article_title' => 'Eksplorasi Seni Musik',
            'article_date' => '2023-06-05',
            'article_text' => 'Meningkatkan Kreativitas dan Ekspresi Diri melalui Bermain Musik....',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_72190326')->insert([
            'article_title' => 'Mengenal Kesenangan Ngoding',
            'article_date' => '2023-06-10',
            'article_text' => 'Memulai Perjalanan dalam Dunia Pemrograman....',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
