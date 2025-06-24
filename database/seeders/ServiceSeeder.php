<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'UI/UX Designer',
                'icon' => 'uil uil-web-grid',
                'description' => 'I create a ui element interactions...'
            ],
            [
                'name' => 'Frontend Developer',
                'icon' => 'uil uil-web-grid',
                'description' => 'I create a ui template interactions...'
            ],
            [
                'name' => 'Backend Developer',
                'icon' => 'uil uil-web-grid',
                'description' => 'I create a api interactions...'
            ],
        ]);
    }
}
