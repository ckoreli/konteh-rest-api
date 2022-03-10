<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'id' => '621cce90b707f8b3243a2917',
            'name' => 'Čitaonica',
            'faculty_id' => '621cce904343d3504b31255b'
        ]);

        DB::table('rooms')->insert([
            'id' => '621cce90d1ccbdd3e7689298',
            'name' => 'Čitaonica',
            'faculty_id' => '621cce904fe28ca82550bc67'
        ]);

        DB::table('rooms')->insert([
            'id' => '621cce9014d07d5083dc7668',
            'name' => 'Učionica 215',
            'faculty_id' => '621cce904fe28ca82550bc67'
        ]);

        DB::table('rooms')->insert([
            'id' => '621cce90533241aed2dbd8eb',
            'name' => 'Čitaonica',
            'faculty_id' => '621cce90b11c90d836e0cea9'
        ]);

        DB::table('rooms')->insert([
            'id' => '621cce908b1823d75b8d4ac8',
            'name' => 'Virxo',
            'faculty_id' => '621cce90b11c90d836e0cea9'
        ]);

        DB::table('rooms')->insert([
            'id' => '621cce90ac116b59528474a2',
            'name' => 'Čitaonica',
            'faculty_id' => '621cce90d28fe17b49ad939a'
        ]);
    }
}
