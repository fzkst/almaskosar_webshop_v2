<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
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
        $iphones = array(
            //14 ProMax
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 128,
                'popular' => 0,
                'price' => 629990,
                'stock' => 5,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 256,
                'popular' => 1,
                'price' => 689990,
                'stock' => 0,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 512,
                'popular' => 0,
                'price' => 809990,
                'stock' => 3,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 128,
                'popular' => 0,
                'price' => 629990,
                'stock' => 0,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 256,
                'popular' => 0,
                'price' => 689990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 512,
                'popular' => 0,
                'price' => 809990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 1,
                'popular' => 0,
                'price' => 929990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'ezüst',
                'storage' => 128,
                'popular' => 1,
                'price' => 629990,
                'stock' => 0,
                'image' => 'iPhone14proMaxEzust.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'ezüst',
                'storage' => 256,
                'popular' => 0,
                'price' => 689990,
                'stock' => 0,
                'image' => 'iPhone14proMaxEzust.jpg'
            ),
            //14 Pro
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'mélylila',
                'storage' => 128,
                'popular' => 0,
                'price' => 569990,
                'stock' => 0,
                'image' => 'iPhone14proMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'mélylila',
                'storage' => 256,
                'popular' => 0,
                'price' => 629990,
                'stock' => 2,
                'image' => 'iPhone14proMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'mélylila',
                'storage' => 512,
                'popular' => 1,
                'price' => 749990,
                'stock' => 2,
                'image' => 'iPhone14proMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'mélylila',
                'storage' => 1,
                'popular' => 0,
                'price' => 869990,
                'stock' => 2,
                'image' => 'iPhone14proMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'arany',
                'storage' => 128,
                'popular' => 1,
                'price' => 569990,
                'stock' => 2,
                'image' => 'iPhone14proArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'arany',
                'storage' => 256,
                'popular' => 0,
                'price' => 629990,
                'stock' => 2,
                'image' => 'iPhone14proArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'arany',
                'storage' => 256,
                'popular' => 0,
                'price' => 629990,
                'stock' => 2,
                'image' => 'iPhone14proArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'arany',
                'storage' => 256,
                'popular' => 0,
                'price' => 629990,
                'stock' => 2,
                'image' => 'iPhone14proArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'arany',
                'storage' => 512,
                'popular' => 0,
                'price' => 749990,
                'stock' => 0,
                'image' => 'iPhone14proArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'arany',
                'storage' => 1,
                'popular' => 0,
                'price' => 869990,
                'stock' => 3,
                'image' => 'iPhone14proArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'ezüst',
                'storage' => 128,
                'popular' => 0,
                'price' => 569990,
                'stock' => 0,
                'image' => 'iPhone14proEzust.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'ezüst',
                'storage' => 256,
                'popular' => 0,
                'price' => 629990,
                'stock' => 4,
                'image' => 'iPhone14proEzust.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'ezüst',
                'storage' => 512,
                'popular' => 1,
                'price' => 749990,
                'stock' => 2,
                'image' => 'iPhone14proEzust.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'ezüst',
                'storage' => 1,
                'popular' => 0,
                'price' => 869990,
                'stock' => 4,
                'image' => 'iPhone14proEzust.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'asztrofekete',
                'storage' => 128,
                'popular' => 1,
                'price' => 569990,
                'stock' => 8,
                'image' => 'iPhone14proAsztrofekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'asztrofekete',
                'storage' => 256,
                'popular' => 0,
                'price' => 629990,
                'stock' => 8,
                'image' => 'iPhone14proAsztrofekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'asztrofekete',
                'storage' => 512,
                'popular' => 0,
                'price' => 749990,
                'stock' => 8,
                'image' => 'iPhone14proAsztrofekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro',
                'color' => 'asztrofekete',
                'storage' => 1,
                'popular' => 0,
                'price' => 869990,
                'stock' => 0,
                'image' => 'iPhone14proAsztrofekete.jpg'
            ),
            //14 Plus
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'kék',
                'storage' => 128,
                'popular' => 0,
                'price' => 499990,
                'stock' => 3,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'kék',
                'storage' => 256,
                'popular' => 1,
                'price' => 559990,
                'stock' => 3,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'kék',
                'storage' => 512,
                'popular' => 0,
                'price' => 679990,
                'stock' => 1,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'lila',
                'storage' => 128,
                'popular' => 1,
                'price' => 499990,
                'stock' => 1,
                'image' => 'iPhone14PlusLila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'lila',
                'storage' => 256,
                'popular' => 1,
                'price' => 559990,
                'stock' => 2,
                'image' => 'iPhone14PlusLila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'lila',
                'storage' => 512,
                'popular' => 1,
                'price' => 679990,
                'stock' => 2,
                'image' => 'iPhone14PlusLila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'éjfekete',
                'storage' => 128,
                'popular' => 0,
                'price' => 499990,
                'stock' => 5,
                'image' => 'iPhone14PlusEjfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'éjfekete',
                'storage' => 256,
                'popular' => 0,
                'price' => 559990,
                'stock' => 3,
                'image' => 'iPhone14PlusEjfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'éjfekete',
                'storage' => 521,
                'popular' => 1,
                'price' => 679990,
                'stock' => 3,
                'image' => 'iPhone14PlusEjfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'csillagfény',
                'storage' => 128,
                'popular' => 0,
                'price' => 499990,
                'stock' => 3,
                'image' => 'iPhone14PlusCsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'csillagfény',
                'storage' => 256,
                'popular' => 1,
                'price' => 559990,
                'stock' => 3,
                'image' => 'iPhone14PlusCsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => 'csillagfény',
                'storage' => 512,
                'popular' => 0,
                'price' => 679990,
                'stock' => 3,
                'image' => 'iPhone14PlusCsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => '(PRODUCT)RED',
                'storage' => 128,
                'popular' => 0,
                'price' => 499990,
                'stock' => 6,
                'image' => 'iPhone14PlusProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => '(PRODUCT)RED',
                'storage' => 256,
                'popular' => 1,
                'price' => 559990,
                'stock' => 4,
                'image' => 'iPhone14PlusProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Plus',
                'color' => '(PRODUCT)RED',
                'storage' => 512,
                'popular' => 0,
                'price' => 679990,
                'stock' => 2,
                'image' => 'iPhone14PlusProductRed.jpg'
            ),
            //14
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'kék',
                'storage' => 128,
                'popular' => 0,
                'price' => 449990,
                'stock' => 3,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'kék',
                'storage' => 256,
                'popular' => 1,
                'price' => 509990,
                'stock' => 1,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'kék',
                'storage' => 512,
                'popular' => 0,
                'price' => 629990,
                'stock' => 1,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'lila',
                'storage' => 128,
                'popular' => 1,
                'price' => 449990,
                'stock' => 4,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'lila',
                'storage' => 256,
                'popular' => 1,
                'price' => 509990,
                'stock' => 2,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'lila',
                'storage' => 512,
                'popular' => 0,
                'price' => 629990,
                'stock' => 2,
                'image' => 'iPhone14PlusKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'éjfekete',
                'storage' => 128,
                'popular' => 0,
                'price' => 449990,
                'stock' => 6,
                'image' => 'iPhone14Ejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'éjfekete',
                'storage' => 256,
                'popular' => 0,
                'price' => 509990,
                'stock' => 5,
                'image' => 'iPhone14Ejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'éjfekete',
                'storage' => 512,
                'popular' => 1,
                'price' => 629990,
                'stock' => 3,
                'image' => 'iPhone14Ejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'csillagfény',
                'storage' => 128,
                'popular' => 0,
                'price' => 449990,
                'stock' => 5,
                'image' => 'iPhone14Csillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'csillagfény',
                'storage' => 256,
                'popular' => 1,
                'price' => 509990,
                'stock' => 3,
                'image' => 'iPhone14Csillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => 'csillagfény',
                'storage' => 512,
                'popular' => 0,
                'price' => 629990,
                'stock' => 2,
                'image' => 'iPhone14Csillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => '(PRODUCT)RED',
                'storage' => 128,
                'popular' => 0,
                'price' => 449990,
                'stock' => 4,
                'image' => 'iPhone14ProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => '(PRODUCT)RED',
                'storage' => 256,
                'popular' => 1,
                'price' => 509990,
                'stock' => 3,
                'image' => 'iPhone14ProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14',
                'color' => '(PRODUCT)RED',
                'storage' => 512,
                'popular' => 0,
                'price' => 629990,
                'stock' => 3,
                'image' => 'iPhone14ProductRed.jpg'
            ),
            //13
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'rózsaszín',
                'storage' => 128,
                'popular' => 1,
                'price' => 389000,
                'stock' => 2,
                'image' => 'iphone13Rozsaszin.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'rózsaszín',
                'storage' => 256,
                'popular' => 0,
                'price' => 449000,
                'stock' => 1,
                'image' => 'iphone13Rozsaszin.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'rózsaszín',
                'storage' => 512,
                'popular' => 0,
                'price' => 569000,
                'stock' => 1,
                'image' => 'iphone13Rozsaszin.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'kék',
                'storage' => 128,
                'popular' => 0,
                'price' => 389000,
                'stock' => 1,
                'image' => 'iphone13Kek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'kék',
                'storage' => 256,
                'popular' => 0,
                'price' => 449000,
                'stock' => 0,
                'image' => 'iphone13Kek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'kék',
                'storage' => 512,
                'popular' => 0,
                'price' => 569000,
                'stock' => 0,
                'image' => 'iphone13Kek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'éjfekete',
                'storage' => 128,
                'popular' => 0,
                'price' => 389000,
                'stock' => 3,
                'image' => 'iPhone13Ejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'éjfekete',
                'storage' => 256,
                'popular' => 0,
                'price' => 449000,
                'stock' => 1,
                'image' => 'iPhone13Ejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'éjfekete',
                'storage' => 512,
                'popular' => 0,
                'price' => 569000,
                'stock' => 0,
                'image' => 'iPhone13Ejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'csillagfény',
                'storage' => 128,
                'popular' => 0,
                'price' => 389000,
                'stock' => 2,
                'image' => 'iphone13Csillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'csillagfény',
                'storage' => 256,
                'popular' => 0,
                'price' => 449000,
                'stock' => 1,
                'image' => 'iphone13Csillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'csillagfény',
                'storage' => 512,
                'popular' => 0,
                'price' => 569000,
                'stock' => 0,
                'image' => 'iphone13Csillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'zöld',
                'storage' => 128,
                'popular' => 0,
                'price' => 389000,
                'stock' => 2,
                'image' => 'iPhone12Zold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'zöld',
                'storage' => 256,
                'popular' => 0,
                'price' => 449000,
                'stock' => 1,
                'image' => 'iPhone12Zold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => 'zöld',
                'storage' => 512,
                'popular' => 0,
                'price' => 569000,
                'stock' => 0,
                'image' => 'iPhone12Zold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => '(PRODUCT)RED',
                'storage' => 128,
                'popular' => 1,
                'price' => 389000,
                'stock' => 2,
                'image' => 'iPhone12ProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => '(PRODUCT)RED',
                'storage' => 256,
                'popular' => 0,
                'price' => 449000,
                'stock' => 0,
                'image' => 'iPhone12ProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13',
                'color' => '(PRODUCT)RED',
                'storage' => 512,
                'popular' => 0,
                'price' => 569000,
                'stock' => 0,
                'image' => 'iPhone12ProductRed.jpg'
            ),
            //13 mini
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'rózsaszín',
                'storage' => 128,
                'popular' => 1,
                'price' => 339000,
                'stock' => 2,
                'image' => 'iphone13MiniRozsaszin.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'rózsaszín',
                'storage' => 256,
                'popular' => 0,
                'price' => 399000,
                'stock' => 1,
                'image' => 'iphone13MiniRozsaszin.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'rózsaszín',
                'storage' => 512,
                'popular' => 0,
                'price' => 519000,
                'stock' => 0,
                'image' => 'iphone13MiniRozsaszin.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'kék',
                'storage' => 128,
                'popular' => 0,
                'price' => 339000,
                'stock' => 2,
                'image' => 'iphone13MiniKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'kék',
                'storage' => 256,
                'popular' => 0,
                'price' => 399000,
                'stock' => 1,
                'image' => 'iphone13MiniKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'kék',
                'storage' => 512,
                'popular' => 0,
                'price' => 519000,
                'stock' => 0,
                'image' => 'iphone13MiniKek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'éjfekete',
                'storage' => 128,
                'popular' => 1,
                'price' => 339000,
                'stock' => 4,
                'image' => 'iPhone13MiniEjfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'éjfekete',
                'storage' => 256,
                'popular' => 0,
                'price' => 399000,
                'stock' => 2,
                'image' => 'iPhone13MiniEjfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'éjfekete',
                'storage' => 512,
                'popular' => 0,
                'price' => 519000,
                'stock' => 2,
                'image' => 'iPhone13MiniEjfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'csillagfény',
                'storage' => 128,
                'popular' => 1,
                'price' => 339000,
                'stock' => 3,
                'image' => 'iphone13MiniCsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'csillagfény',
                'storage' => 256,
                'popular' => 0,
                'price' => 399000,
                'stock' => 1,
                'image' => 'iphone13MiniCsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'csillagfény',
                'storage' => 512,
                'popular' => 0,
                'price' => 519000,
                'stock' => 0,
                'image' => 'iphone13MiniCsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'zöld',
                'storage' => 128,
                'popular' => 0,
                'price' => 339000,
                'stock' => 1,
                'image' => 'iphone13MiniZold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'zöld',
                'storage' => 256,
                'popular' => 0,
                'price' => 399000,
                'stock' => 0,
                'image' => 'iphone13MiniZold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => 'zöld',
                'storage' => 512,
                'popular' => 0,
                'price' => 519000,
                'stock' => 0,
                'image' => 'iphone13MiniZold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => '(PRODUCT)RED',
                'storage' => 128,
                'popular' => 1,
                'price' => 339000,
                'stock' => 1,
                'image' => 'iPhone13MiniProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => '(PRODUCT)RED',
                'storage' => 256,
                'popular' => 0,
                'price' => 399000,
                'stock' => 1,
                'image' => 'iPhone13MiniProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 13 mini',
                'color' => '(PRODUCT)RED',
                'storage' => 512,
                'popular' => 0,
                'price' => 519000,
                'stock' => 0,
                'image' => 'iPhone13MiniProductRed.jpg'
            ),
            //SE
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => 'éjfekete',
                'storage' => 64,
                'popular' => 1,
                'price' => 239990,
                'stock' => 1,
                'image' => 'iPhoneSEejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => 'éjfekete',
                'storage' => 128,
                'popular' => 0,
                'price' => 269990,
                'stock' => 1,
                'image' => 'iPhoneSEejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => 'éjfekete',
                'storage' => 256,
                'popular' => 0,
                'price' => 329990,
                'stock' => 0,
                'image' => 'iPhoneSEejfekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => 'csillagfény',
                'storage' => 64,
                'popular' => 0,
                'price' => 239990,
                'stock' => 1,
                'image' => 'iPhoneSEcsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => 'csillagfény',
                'storage' => 128,
                'popular' => 0,
                'price' => 269990,
                'stock' => 0,
                'image' => 'iPhoneSEcsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => 'csillagfény',
                'storage' => 256,
                'popular' => 0,
                'price' => 329990,
                'stock' => 0,
                'image' => 'iPhoneSEcsillagfeny.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => '(PRODUCT)RED',
                'storage' => 64,
                'popular' => 1,
                'price' => 239990,
                'stock' => 0,
                'image' => 'iPhoneSEproductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => '(PRODUCT)RED',
                'storage' => 128,
                'popular' => 0,
                'price' => 269990,
                'stock' => 1,
                'image' => 'iPhoneSEproductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone SE',
                'color' => '(PRODUCT)RED',
                'storage' => 256,
                'popular' => 0,
                'price' => 329990,
                'stock' => 1,
                'image' => 'iPhoneSEproductRed.jpg'
            ),
            //12
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'kék',
                'storage' => 64,
                'popular' => 1,
                'price' => 339990,
                'stock' => 0,
                'image' => 'iPhone12Kek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'kék',
                'storage' => 128,
                'popular' => 0,
                'price' => 369990,
                'stock' => 1,
                'image' => 'iPhone12Kek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'kék',
                'storage' => 256,
                'popular' => 0,
                'price' => 429990,
                'stock' => 0,
                'image' => 'iPhone12Kek.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'lila',
                'storage' => 64,
                'popular' => 0,
                'price' => 339990,
                'stock' => 0,
                'image' => 'iPhone12Lila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'lila',
                'storage' => 128,
                'popular' => 0,
                'price' => 369990,
                'stock' => 1,
                'image' => 'iPhone12Lila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'lila',
                'storage' => 256,
                'popular' => 0,
                'price' => 429990,
                'stock' => 0,
                'image' => 'iPhone12Lila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'zöld',
                'storage' => 64,
                'popular' => 1,
                'price' => 339990,
                'stock' => 0,
                'image' => 'iPhone12Zold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'zöld',
                'storage' => 128,
                'popular' => 0,
                'price' => 369990,
                'stock' => 1,
                'image' => 'iPhone12Zold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'zöld',
                'storage' => 256,
                'popular' => 0,
                'price' => 429990,
                'stock' => 0,
                'image' => 'iPhone12Zold.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'fehér',
                'storage' => 64,
                'popular' => 1,
                'price' => 339990,
                'stock' => 1,
                'image' => 'iPhone12Feher.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'fehér',
                'storage' => 128,
                'popular' => 0,
                'price' => 369990,
                'stock' => 1,
                'image' => 'iPhone12Feher.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'fehér',
                'storage' => 256,
                'popular' => 0,
                'price' => 429990,
                'stock' => 1,
                'image' => 'iPhone12Feher.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'fekete',
                'storage' => 64,
                'popular' => 1,
                'price' => 339990,
                'stock' => 1,
                'image' => 'iPhone12Fekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'fekete',
                'storage' => 128,
                'popular' => 0,
                'price' => 369990,
                'stock' => 1,
                'image' => 'iPhone12Fekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => 'fekete',
                'storage' => 256,
                'popular' => 0,
                'price' => 429990,
                'stock' => 1,
                'image' => 'iPhone12Fekete.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => '(PRODUCT)RED',
                'storage' => 64,
                'popular' => 1,
                'price' => 339990,
                'stock' => 1,
                'image' => 'iPhone12ProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => '(PRODUCT)RED',
                'storage' => 128,
                'popular' => 0,
                'price' => 369990,
                'stock' => 1,
                'image' => 'iPhone12ProductRed.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 12',
                'color' => '(PRODUCT)RED',
                'storage' => 256,
                'popular' => 0,
                'price' => 429990,
                'stock' => 1,
                'image' => 'iPhone12ProductRed.jpg'
            ),
        );
        DB::table('products')->insert($iphones);


        $ipads11 = array(
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 128,
                'popular' => 0,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 128,
                'popular' => 0,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 256,
                'popular' => 1,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 0,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 1,
                'price' => 649990,
                'stock' => 0,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 1,
                'popular' => 0,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 1,
                'popular' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 0,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 2,
                'popular' => 0,
                'cellular' => 0,
                'price' => 1129990,
                'stock' => 3,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 2,
                'popular' => 0,
                'cellular' => 0,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 128,
                'popular' => 0,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 128,
                'popular' => 1,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 4,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 4,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 1,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 1,
                'popular' => 0,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 1,
                'popular' => 0,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 2,
                'popular' => 0,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 2,
                'popular' => 0,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 3,
                'image' => 'iPadPro11Ezust.jpg'
            ),
        );
        DB::table('products')->insert($ipads11);


        $ipads129 = array(
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 128,
                'popular' => 1,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 0,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 128,
                'popular' => 0,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 6,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 6,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 256,
                'popular' => 1,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 6,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 1,
                'popular' => 0,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 1,
                'popular' => 0,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 3,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 2,
                'popular' => 0,
                'cellular' => 0,
                'price' => 11299990,
                'stock' => 2,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 2,
                'popular' => 1,
                'cellular' => 0,
                'price' => 11299990,
                'stock' => 4,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 128,
                'popular' => 0,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 128,
                'popular' => 0,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 2,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 3,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 1,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 512,
                'popular' => 0,
                'cellular' => 1,
                'price' => 649990,
                'stock' => 6,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 1,
                'popular' => 0,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 2,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 1,
                'popular' => 0,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro129Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 2,
                'popular' => 0,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 5,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 2,
                'popular' => 0,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro129Ezust.jpg'
            ),
        );
        DB::table('products')->insert($ipads129);


        $ipadAirs = array(
            //Air asztroszürke
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 4,
                'image' => 'iPadAirAsztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirAsztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 3,
                'image' => 'iPadAirAsztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirAsztroszurke.jpg'
            ),
            //Air kék
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 64,
                'popular' => 1,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirKek.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirKek.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirKek.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirKek.jpg'
            ),
            //Air rózsaszín
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirRozsaszin.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirRozsaszin.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirRozsaszin.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 256,
                'popular' => 1,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirRozsaszin.jpg'
            ),
            //Air lila
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirLila.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirLila.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirLila.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 256,
                'popular' => 1,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirLila.jpg'
            ),
            //Air csillagfény
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 64,
                'popular' => 0,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 256,
                'popular' => 1,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 256,
                'popular' => 0,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
        );
        DB::table('products')->insert($ipadAirs);

        $macbooks = array(
            //16 Pro
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 16',
                'color' => 'asztroszürke',
                'cpu' => 'M2 Max',
                'memory' => 32,
                'storage' => 1,
                'popular' => 0,
                'price' => 1749990,
                'stock' => 1,
                'image' => 'macbookPro16asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 16',
                'color' => 'ezust',
                'cpu' => 'M2 Max',
                'memory' => 32,
                'storage' => 1,
                'popular' => 1,
                'price' => 1749990,
                'stock' => 1,
                'image' => 'macbookPro16ezust.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 16',
                'color' => 'asztroszürke',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 1,
                'popular' => 0,
                'price' => 1349990,
                'stock' => 0,
                'image' => 'macbookPro16asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 16',
                'color' => 'ezust',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 1,
                'popular' => 0,
                'price' => 1349990,
                'stock' => 1,
                'image' => 'macbookPro16ezust.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 16',
                'color' => 'asztroszürke',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 512,
                'popular' => 0,
                'price' => 1249990,
                'stock' => 1,
                'image' => 'macbookPro16asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 16',
                'color' => 'ezust',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 512,
                'popular' => 0,
                'price' => 1249990,
                'stock' => 2,
                'image' => 'macbookPro16ezust.jpg'
            ),
            //14 Pro
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 14',
                'color' => 'asztroszürke',
                'cpu' => 'M2 Max',
                'memory' => 32,
                'storage' => 1,
                'popular' => 0,
                'price' => 1349990,
                'stock' => 1,
                'image' => 'macbookPro14asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 14',
                'color' => 'ezust',
                'cpu' => 'M2 Max',
                'memory' => 32,
                'storage' => 1,
                'popular' => 0,
                'price' => 1349990,
                'stock' => 1,
                'image' => 'macbookPro14ezust.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 14',
                'color' => 'asztroszürke',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 1,
                'popular' => 0,
                'price' => 1249990,
                'stock' => 1,
                'image' => 'macbookPro14asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 14',
                'color' => 'ezust',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 1,
                'popular' => 0,
                'price' => 1249990,
                'stock' => 1,
                'image' => 'macbookPro14ezust.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 14',
                'color' => 'asztroszürke',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 512,
                'popular' => 0,
                'price' => 999990,
                'stock' => 1,
                'image' => 'macbookPro14asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 14',
                'color' => 'ezust',
                'cpu' => 'M2 Pro',
                'memory' => 16,
                'storage' => 512,
                'popular' => 0,
                'price' => 999990,
                'stock' => 1,
                'image' => 'macbookPro14ezust.jpg'
            ),
            //13 Pro
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 13',
                'color' => 'asztroszürke',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 512,
                'popular' => 0,
                'price' => 749990,
                'stock' => 1,
                'image' => 'macbookPro13asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 13',
                'color' => 'ezust',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 512,
                'popular' => 0,
                'price' => 749990,
                'stock' => 1,
                'image' => 'macbookPro13ezust.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 13',
                'color' => 'asztroszürke',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 256,
                'popular' => 1,
                'price' => 649990,
                'stock' => 1,
                'image' => 'macbookPro13asztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Pro 13',
                'color' => 'ezust',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 256,
                'popular' => 0,
                'price' => 649990,
                'stock' => 1,
                'image' => 'macbookPro13ezust.jpg'
            ),
            //Air M2
            array(
                'category_id' => 3,
                'model' => 'MacBook Air',
                'color' => 'éjfekete',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 512,
                'popular' => 1,
                'price' => 749990,
                'stock' => 1,
                'image' => 'macbookAirejfekete.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Air',
                'color' => 'csillagfény',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 512,
                'popular' => 1,
                'price' => 749990,
                'stock' => 1,
                'image' => 'macbookAir13csillagfeny.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Air',
                'color' => 'asztroszürke',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 512,
                'popular' => 0,
                'price' => 749990,
                'stock' => 1,
                'image' => 'macbookAirasztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Air',
                'color' => 'ezust',
                'cpu' => 'M2',
                'memory' => 8,
                'storage' => 512,
                'popular' => 1,
                'price' => 749990,
                'stock' => 1,
                'image' => 'macbookAir13ezust.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Air',
                'color' => 'asztroszürke',
                'cpu' => 'M1',
                'memory' => 8,
                'storage' => 256,
                'popular' => 0,
                'price' => 499990,
                'stock' => 1,
                'image' => 'macbookAirasztroszurke.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Air',
                'color' => 'arany',
                'cpu' => 'M1',
                'memory' => 8,
                'storage' => 256,
                'popular' => 1,
                'price' => 499990,
                'stock' => 1,
                'image' => 'macbookAirArany.jpg'
            ),
            array(
                'category_id' => 3,
                'model' => 'MacBook Air',
                'color' => 'ezust',
                'cpu' => 'M1',
                'memory' => 8,
                'storage' => 256,
                'popular' => 1,
                'price' => 499990,
                'stock' => 1,
                'image' => 'macbookAir13ezust.jpg'
            ),
        );
        DB::table('products')->insert($macbooks);
    }
}
