<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            'id' => '621cce904343d3504b31255b',
            'name' => 'Fakultet tehničkih nauka',
            'opens' => '08:00',
            'closes' => '14:00'
        ]);

        DB::table('faculties')->insert([
            'id' => '621cce904fe28ca82550bc67',
            'name' => 'Prirodno-matematički fakultet',
            'opens' => '08:00',
            'closes' => '18:00'
        ]);

        DB::table('faculties')->insert([
            'id' => '621cce90b11c90d836e0cea9',
            'name' => 'Tehnološki fakultet',
            'opens' => '08:00',
            'closes' => '18:00'
        ]);

        DB::table('faculties')->insert([
            'id' => '621cce90d28fe17b49ad939a',
            'name' => 'Pravni fakultet',
            'opens' => '09:00',
            'closes' => '16:00'
        ]);
    }
}
