<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Jetstream\Features;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Jordan's user
        $this->seedJordan();
        
        // Create additional users
        \App\Models\User::factory(100)->create();
    }

    /**
     * Seed Jordan's user.
     */
    private function seedJordan(): void
    {
        $jordan = User::factory()->create([
            'name' => 'Ahairwe Jordan',
            'email' => 'jordankatetegirwe@gmail.com',
            'password' => Hash::make('kali')
        ]);

        // Ensure email verification is set
        $jordan->markEmailAsVerified();

        // Ensure Jordan has a personal team
        if (Features::hasTeamFeatures()) {
            $team = $jordan->ownedTeams()->create([
                'name' => $jordan->name."'s Team",
                'personal_team' => true,
            ]);

            $jordan->current_team_id = $team->id;
            $jordan->save();
        }
    }
}
