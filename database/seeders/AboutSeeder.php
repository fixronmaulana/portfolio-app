<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert(
            [
                [
                    'name' => "Fikron Maulana",
                    'home_image' => "no-image.png",
                    'banner_image' => "no-image.png",
                    'phone' => "444-444-444",
                    'email' => "fikron@gmail.com",
                    'address' => "Banyuwangi",
                    'description' => "Fullstack Web Developer with extencive knowlodge...",
                    'summary' => "High level experience in web...",
                    'tagline' => "Fullstack Web Developer...",
                    'cv' => "fixron_maulana.pdf",

                ]
            ]
        );
    }
}
