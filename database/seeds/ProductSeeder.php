<?php


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //loop 迴圈跑20次產生以下假資料
        for ($i=0; $i < 20; $i++) {
            # code...
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => rand(100,2000),
                'discount' => rand(0, 100) / 100,
                'discript' => Str::random(16),
                'img' => Str::random(16),

            ]);
        }
    }
}
