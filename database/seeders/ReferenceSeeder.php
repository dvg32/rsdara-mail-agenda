<?php

namespace Database\Seeders;

use App\Models\reference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Reference\Reference as ReferenceReference;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        reference::create(['description' => 'Jenis Email', 'status' => 1]);
        reference::create(['description' => 'Jenis Kelamin', 'status' => 1]);
        reference::create(['description' => 'Unit Kerja', 'status' => 1]);
        reference::create(['description' => 'Jabatan', 'status' => 1]);
        reference::create(['description' => 'Pendidikan', 'status' => 1]);
    }
}
