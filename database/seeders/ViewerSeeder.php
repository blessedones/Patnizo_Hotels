<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ViewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'viewer',
            'email' => 'viewer@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$uKM5zAmhUCd.dLwDZd5sw.SavxE41qCksC1jVEjAISKgEqsE0Rxa2', // pass
        ])->assignRole('viewer');
    }
}
