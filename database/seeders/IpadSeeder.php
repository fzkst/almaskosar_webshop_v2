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
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 3,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 0,
                'price' => 1129990,
                'stock' => 3,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 0,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 4,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 4,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 1,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 5,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro11Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 11',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 3,
                'image' => 'iPadPro11Ezust.jpg'
            ),
            // 12.9"
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 0,
                'price' => 469990,
                'stock' => 6,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 6,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 0,
                'price' => 529990,
                'stock' => 4,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 5,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 6,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 0,
                'price' => 889990,
                'stock' => 3,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 0,
                'price' => 11299990,
                'stock' => 2,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 0,
                'price' => 11299990,
                'stock' => 4,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 5,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 128,
                'cellular' => 1,
                'price' => 469990,
                'stock' => 2,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 5,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 256,
                'cellular' => 1,
                'price' => 529990,
                'stock' => 3,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 512,
                'cellular' => 0,
                'price' => 649990,
                'stock' => 1,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 512,
                'cellular' => 1,
                'price' => 649990,
                'stock' => 6,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 2,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 1,
                'cellular' => 1,
                'price' => 889990,
                'stock' => 6,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'asztroszürke',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 5,
                'image' => 'iPadPro12.9Asztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Pro 12.9',
                'color' => 'ezüst',
                'storage' => 2,
                'cellular' => 1,
                'price' => 1129990,
                'stock' => 6,
                'image' => 'iPadPro12.9Ezust.jpg'
            ),
            //Air asztroszürke
            array(
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 64,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 4,
                'image' => 'iPadAirAsztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirAsztroszurke.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'asztroszürke',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 3,
                'image' => 'iPadAirAsztroszurke.jpg'
            ),
            array(
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
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 64,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirKek.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirKek.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'kék',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirKek.jpg'
            ),
            array(
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
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 64,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirRozsaszin.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirRozsaszin.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'rózsaszín',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirRozsaszin.jpg'
            ),
            array(
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
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 64,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirLila.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirLila.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'lila',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirLila.jpg'
            ),
            array(
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
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 64,
                'cellular' => 0,
                'price' => 344990,
                'stock' => 1,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 64,
                'cellular' => 1,
                'price' => 344990,
                'stock' => 6,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 256,
                'cellular' => 0,
                'price' => 434990,
                'stock' => 4,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
            array(
                'model' => 'iPad Air',
                'color' => 'csillagfeny',
                'storage' => 256,
                'cellular' => 1,
                'price' => 434990,
                'stock' => 6,
                'image' => 'iPadAirCsillagfeny.jpg'
            ),
        );

        DB::table('ipads')->insert($ipads);

    }
}
