<?php

namespace Database\Seeders;

use App\Models\Entry;
use App\Models\User;
use Database\Factories\EntryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $users = User::all();

        // if ($users->isEmpty()) {
        //     $users = User::factory(5)->create();
        // }

        // foreach ($users as $user) {
        //     Entry::factory(2)->create(['user_id' => $user->id]);
        // }

        EntryFactory::new()->count(100)->create();
    }
}
