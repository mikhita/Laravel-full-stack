<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 3 ; $i++) { 
            DB::table('posts')->insert([
                'title' => Str::random(20),
                'status' => 1,
                'publish_date' => date('Y-m-d'),
                'user_id' => 1,
                'decimal' => 0.00,
                'float' => 0.0,
                'integer' => 0,
            ]);
        }
    }
}