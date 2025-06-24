<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert(
            [
                [
                    'link' => 'https://www.facebook.com',
                    'icon' => 'ui uil-facebook-f',
                ],
                [
                    'link' => 'https://www.instagram.com',
                    'icon' => 'fab fa-instagram',
                ],
            ]
            );
    }
}
