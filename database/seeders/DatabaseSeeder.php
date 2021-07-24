<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UserSeeder::class);

        User::factory()->count(50)
            ->create()->each(function($user) {
                if($user->is_admin) {
                    Post::factory()->create([
                        'user_id' => $user->id
                    ]);
                }
            });
    }
}
