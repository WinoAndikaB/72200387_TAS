<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class Mahasiswa1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
            for($i = 1; $i <= 80; $i++)
    {
        DB::table('mahasiswa1')->insert([
            'nim' => $faker->nik(),
            'nama' => $faker->name(),
            'gender' => $faker->suffix(),
            'jurusan' => $faker->title(),
            'bidang_minat' => $faker->jobtitle()
            ]);
    }
 }
}
