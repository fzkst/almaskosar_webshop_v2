<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iphones = array(
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 128,
                'price' => 629990,
                'stock' => 5,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 256,
                'price' => 689990,
                'stock' => 4,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 512,
                'price' => 809990,
                'stock' => 3,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 128,
                'price' => 629990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 256,
                'price' => 689990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 512,
                'price' => 809990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 1,
                'price' => 929990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'ezüst',
                'storage' => 128,
                'price' => 629990,
                'stock' => 3,
                'image' => 'iPhone14proMaxEzust.jpg'
            ),
            array(
                'model' => 'iPhone 14 Pro Max',
                'color' => 'ezüst',
                'storage' => 256,
                'price' => 689990,
                'stock' => 3,
                'image' => 'iPhone14proMaxEzust.jpg'
            )
        );

        DB::table('iphones')->insert($iphones);

    }
}
