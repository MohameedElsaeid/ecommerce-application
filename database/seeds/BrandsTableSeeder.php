<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'image' => 'client_logo_1.png',
                'name' => 'client_1'
            ], [
                'image' => 'client_logo_2.png',
                'name' => 'client_2'
            ], [
                'image' => 'client_logo_3.png',
                'name' => 'client_3'
            ], [
                'image' => 'client_logo_4.png',
                'name' => 'client_4'
            ], [
                'image' => 'client_logo_5.png',
                'name' => 'client_5'
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'brand_name' => $brand['name'],
                'brand_image' => $brand['image'],
            ]);
        }
    }
}
