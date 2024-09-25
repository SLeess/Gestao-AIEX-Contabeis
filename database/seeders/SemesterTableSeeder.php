<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("semesters")->insert([
            [
                "identificador" => "2023-1"
            ],
            [
                "identificador" => "2023-2"
            ],
            [
                "identificador" => "2024-1"
            ],
            [
                "identificador" => "2024-2"
            ],
        ]);
    }
}
