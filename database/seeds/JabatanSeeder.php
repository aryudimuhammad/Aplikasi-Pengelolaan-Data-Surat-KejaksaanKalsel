<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([
            'uuid' => Str::random(36),
            'jabatan' => 'Jabatan 1',
        ]);

        DB::table('jabatans')->insert([
            'uuid' => Str::random(36),
            'jabatan' => 'Jabatan 2',
        ]);
    }
}
