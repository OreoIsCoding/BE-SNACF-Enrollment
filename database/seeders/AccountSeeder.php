<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'username' => 'snacf_admin',
            'email' => 'admin_snacf@edu.ph',
            'password' => Hash::make('snacf2025'),
            'user_type' => 'admin',
            'first_name' => 'SNACF',
            'middle_name' => '',
            'last_name' => 'Admin',
            'status' => 'active'
        ]);
    }
}
