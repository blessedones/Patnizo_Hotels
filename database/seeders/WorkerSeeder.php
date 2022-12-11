<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'worker',
            'email' => 'worker@gmail.com',
            'email_verified_at' => now(),
            'password' => '2y$10$EGmXin7etUi1tHxwyEZolOMylBNiSa4XIOrzDf8tmrvgmnCF.IyoK', // passed
        ])->assignRole('worker');
    }
}
