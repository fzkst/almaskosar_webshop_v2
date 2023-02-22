<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IpadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ipads = array(
            // 11"
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 6,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 3,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 5,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 0,
                'price' => 1129990,
                'stock' => 3,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 0,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 4,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 4,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 1,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 5,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro11AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 3,
                'image' => 'iPadPro11EzustA.jpg'
            ),
            // 12.9"
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 6,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 6,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 6,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 3,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 0,
                'price' => 11299990,
                'stock' => 2,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 0,
                'price' => 11299990,
                'stock' => 4,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 2,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 3,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 1,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 1,
                'price' => 649990,
                'stock' => 6,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 2,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 5,
                'image' => 'iPadPro129AsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro129EzustA.jpg'
            ),
            //Air asztroszürke
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 64,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 4,
                'image' => 'iPadAirAsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirAsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 3,
                'image' => 'iPadAirAsztroszurkeA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirAsztroszurkeA.jpg'
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
                'image' => 'iPadAirKekA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirKekA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirKekA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 256,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirKekA.jpg'
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
                'image' => 'iPadAirRozsaszinA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirRozsaszinA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirRozsaszinA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 256,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirRozsaszinA.jpg'
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
                'image' => 'iPadAirLilaA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirLilaA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirLilaA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 256,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirLilaA.jpg'
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
                'image' => 'iPadAirCsillagfenyA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirCsillagfenyA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirCsillagfenyA.jpg'
            ),
            array(
                'category_id' => 2,
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 256,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirCsillagfenyA.jpg'
            ),
        );

        DB::table('ipads')->insert($ipads);

    }
}
