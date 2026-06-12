<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MajorSeeder::class,
            StudentSeeder::class,
        ]);

        User::updateOrCreate(
            ['email' => 'admin@smkn1cilegon.sch.id'],
            [
                'name' => 'Admin Sekolah',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
