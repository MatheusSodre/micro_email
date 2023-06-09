<?php

namespace Database\Seeders\Company;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'title'       => "hardware",
                'url'         => "hardware" ,
                'description' => "Category hardware",
                'created_at'  => now(),
                'updated_at'  => now(),
            ]
        ]);
    }
    
}
