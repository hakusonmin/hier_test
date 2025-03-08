<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => '1',
                'parent_id' => 'null',
                'name' => '家具・オフィス',
                'path' => 1002,
                'level' => 1,
            ],
            [
                'id' => '2',
                'parent_id' => '1',
                'name' => 'デスク',
                'path' => 20,
                'level' => 2,
            ],
            [
                'id' => '3',
                'parent_id' => '2',
                'name' => 'ワーキングデスク',
                'path' => 400,
                'level' => 3,
            ],
        ]);
    }
}
