<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
      
        $path = database_path('seeders/akr_carcare.sql');

        // Read the SQL file content
        $sql = file_get_contents($path);

        // Execute the SQL file
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Disable foreign key checks
        DB::unprepared($sql);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Re-enable foreign key checks

        $this->command->info('Database seeded successfully!');
        
    }
}
