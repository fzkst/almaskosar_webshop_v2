<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            "name" => "Táblagépek",
            "description" => "Apple tabletek - iPad, iPad Pro, iPad Mini - különböző színekben, méretben és tárhellyel.",
            "status" => 0,
            "popular" => 0,
            "image" => "iPad_pro_kat.png"
        ]);

        Category::factory()->create([
            "name" => "Mobiltelefonok",
            "description" => "Apple okostelefonok iPhone 12-től a legújabbakig.",
            "status" => 0,
            "popular" => 0,
            "image" => "Iphone_14_pro_kat.png"
        ]);

        Category::factory()->create([
            "name" => "Laptopok",
            "description" => "A MacBook Pro az Apple professzionális hordozható számítógépe. 2006-ban mutatta be az Apple, 2020-ig kizárólag Intel processzorral szerelték, 2020. novemberében az Apple saját processzorával mutatott be MacBook Pro-t.",
            "status" => 0,
            "popular" => 0,
            "image" => "MacBook_Pro_kat.png"
        ]);
    }
}
