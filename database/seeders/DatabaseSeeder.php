<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // kode untuk menjalankan semua seeder yang kita punya
        $this->call([

            //mentorseeder harus berada diatas karena database siswa bergantung pada database siswa
            MentorSeeder::class,
            SiswaSeeder::class
            
        ]);
    }
}
