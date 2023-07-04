<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bobots')->insert([
            ['key' => 'c1', 'value' => 1, 'keterangan' => 'rendah', 'bobot' => 0.2],
            ['key' => 'c2', 'value' => 1, 'keterangan' => 'rendah', 'bobot' => 0.2],
            ['key' => 'c3', 'value' => 1, 'keterangan' => 'rendah', 'bobot' => 0.2],
            ['key' => 'c4', 'value' => 1, 'keterangan' => 'rendah', 'bobot' => 0.2],
            ['key' => 'c5', 'value' => 1, 'keterangan' => 'rendah', 'bobot' => 0.2]
        ]);
    }
}
