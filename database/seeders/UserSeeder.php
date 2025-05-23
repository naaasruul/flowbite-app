<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        
        // Create an admin user
        $admin = User::create([
            'name' => 'Admin User',
            'first_name' => 'Admin',
            'last_name' => 'User',
            'username' => 'adminuser',
            'gender'=>'male',
            'email' => 'admin@demo.oo',
            'phone_number' => '0167797762',
            'password' => bcrypt('password'), // Use a secure password
        ]);
        $admin->assignRole('admin');

        // Create a seller user
        $seller = User::create([
            'name' => 'Seller User',
            'first_name' => 'Seller',
            'last_name' => 'User',
            'username' => 'selleruser',
            'gender'=>'male',
            'email' => 'seller@demo.oo',
            'password' => bcrypt('password'), // Use a secure password
            'phone_number' => '1234567890',
            'matrix_number' => 'M123',
        ]);
        $seller->assignRole('seller');

        // Create a buyer user
        $seller = User::create([
            'name' => 'Buyer User',
            'first_name' => 'Buyer',
            'last_name' => 'User',
            'username' => 'buyeruser',
            'gender'=>'male',
            'email' => 'buyer@demo.oo',
            'password' => bcrypt('password'), // Use a secure password
            'phone_number' => '1234567890',
            'matrix_number' => 'B123',
        ]);
        $seller->assignRole('buyer');
    }
}
