<?php

use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 8; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('pegawais')->insert([
                'uuid' => Str::random(36),
                'jabatan_id' => 1,
                'pangkat_id' => 1,
                'nama' => $faker->name,
                'nrp' => $faker->buildingNumber,
                'telp' => $faker->buildingNumber,
                'tempat_lahir' => $faker->address,
                'tgl_lahir' => $faker->date,
                'jk' => 2,
                'alamat' => $faker->address
            ]);
        }
    }
}
