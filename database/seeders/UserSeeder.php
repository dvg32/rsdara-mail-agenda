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
        User::create(['employee_id' => '1', 'name' => 'immedy', 'password' => '$2y$10$kijxfqratj5sBbMNoLs1QeZUIN5PA87I7sc7KucCud04EnUk3BJH.', 'role' => '1', 'status' => '1']);
        User::create(['employee_id' => '2', 'name' => 'dvg32', 'password' => '$2y$10$1.FWVMR5qkYtEnF1E9RH5uouFxPxDnSY34fxO2Hf/Dc.5aAaxoKWi', 'role' => '1', 'status' => '1']);
        User::create(['employee_id' => '3', 'name' => 'juli', 'password' => '$2y$10$TF3ZiY5HpkAeod0Q62fiOOHqeluxqrK7lnbp5d0CZyndiBltPlLXO', 'role' => '3', 'status' => '1']);
    }
}
