<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bbs')->insert([
            [
                'name' => 'aaa',
                'title' => 'kkk',
                'body' => 'jjj'
            ]
        ]);
    }
}
