<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $values = [
            'username' => 'sampleuser',
            'full_name' => 'Sample User',
            'password' => 'password',
        ];

        if (Schema::hasColumn('users', 'name')) {
            $values['name'] = 'Sample User';
        }

        User::updateOrCreate(
            ['email' => 'sample@example.com'],
            $values
        );
    }
}
