<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin
        DB::table('users')->insert([
            'first_name' => 'Abass',
            'last_name' => 'Ahmed',
            'uuid' => '6UbRvqxaVXOJwBqwKuMw',
            'username' => 'admin254',
            'email' => 'admin@nafuu.com',
            'password' => Hash::make('1223344'),
            'contact' => '+254788172345',
            'address' => 'Pangani, Nairobi',
            'role' => 'admin',
            'status' => 'active'
        ]);

        //Vendor
        DB::table('users')->insert([
            'first_name' => 'Hamid',
            'last_name' => 'Ahmed',
            'uuid' => 'w82CyMKWEy886PSlMhiX',
            'username' => 'vendor254',
            'email' => 'vendor@nafuu.com',
            'password' => Hash::make('1223344'),
            'contact' => '+254728172345',
            'address' => 'South-C, Nairobi',
            'role' => 'vendor',
            'status' => 'active'
        ]);

        //Customer
        DB::table('users')->insert([
            'first_name' => 'Yahya',
            'last_name' => 'Siyat',
            'uuid' => 'uS9b1PrdzwelScMlVy98',
            'username' => 'customer254',
            'email' => 'customer@nafuu.com',
            'password' => Hash::make('1223344'),
            'contact' => '+254795172345',
            'address' => 'Nairobi West, Nairobi',
            'role' => 'customer',
            'status' => 'active'
        ]);
    }
}
