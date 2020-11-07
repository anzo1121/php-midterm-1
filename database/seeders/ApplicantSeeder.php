<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("applicants")->insert([
            'name' => Str::random(5),
            'surname' => Str::random(8),
            'position' => Str::random(10),
            'phone' => random_int(111111111, 999999999),
            'is_hired' => (bool)random_int(0, 1),
        ]);
    }
}
