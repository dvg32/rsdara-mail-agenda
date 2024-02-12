<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create(['pegawai_id' => '1', 'username' => 'immedy', 'password' => '$2y$10$kijxfqratj5sBbMNoLs1QeZUIN5PA87I7sc7KucCud04EnUk3BJH.', 'hak_akses' => '1', 'status' => '1']);
        User::create(['pegawai_id' => '2', 'username' => 'dvg32', 'password' => '$2y$10$1.FWVMR5qkYtEnF1E9RH5uouFxPxDnSY34fxO2Hf/Dc.5aAaxoKWi', 'hak_akses' => '1', 'status' => '1']);
    }
}
