<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $iphones = array(
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 128,
                'popular' => 1,
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
                'stock' => 4,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'mélylila',
                'storage' => 512,
                'popular' => 1,
                'price' => 809990,
                'stock' => 3,
                'image' => 'iPhone14proMaxMelylila.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 128,
                'popular' => 1,
                'price' => 629990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 256,
                'popular' => 1,
                'price' => 689990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 512,
                'popular' => 1,
                'price' => 809990,
                'stock' => 3,
                'image' => 'iPhone14proMaxArany.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'arany',
                'storage' => 1,

 'popular' => 1,               'price' => 929990,
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
                'stock' => 3,
                'image' => 'iPhone14proMaxEzust.jpg'
            ),
            array(
                'category_id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'color' => 'ezüst',
                'storage' => 256,
                'popular' => 1,
                'price' => 689990,
                'stock' => 3,
                'image' => 'iPhone14proMaxEzust.jpg'
            )
        );
        DB::table('products')->insert($iphones);


        $ipads11 = array(
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 128,
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
                'cellular' => 0,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 256,
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
                'cellular' => 0,
                'price' => 649990,
                'stock' => 3,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 1,
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
                'cellular' => 0,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 2,
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
                'cellular' => 0,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro129Asztroszurke.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 128,
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
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
        );
        DB::table('products')->insert($ipadAirs);
    }
}
