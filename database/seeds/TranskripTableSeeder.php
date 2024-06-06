<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class TranskripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');
        for ($i = 1; $i <= 100; $i++) {
            DB::table('mahasiswa_529')->insert([
                'NIM' => $faker->randomnumber(8, true),
                'Nama' => $faker->name,
                'Alamat' => $faker->address(),
                'ipk' => $faker->randomFloat(2, 0, 4),
            ]);
        }
    }
}
