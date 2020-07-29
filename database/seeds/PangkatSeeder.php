<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pangkats')->insert([
            'uuid' => Str::random(36),
            'pangkat' => 'Pangkat 1',
        ]);

        DB::table('pangkats')->insert([
            'uuid' => Str::random(36),
            'pangkat' => 'Pangkat 2',
        ]);
    }
}
