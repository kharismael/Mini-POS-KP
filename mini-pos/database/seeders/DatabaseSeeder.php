<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\customer;
use App\Models\product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => (string) Str::uuid(),
            'name' => 'Arief Test',
            'username' => 'testlah',
            'email' => 'test@google.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'email_verified_at' => Carbon::now(),
        ]);

        customer::create([
            'id' => (string) Str::uuid(),
            'name' => 'Saya test',
            'email' => 'saya@google.com',
            'address' => 'Jl. makmur 119 Surabaya',
            'telp' => '0819998653',
        ]);

        product::create([
            'id' => (string) Str::uuid(),
            'name' => 'Beras cap Lele',
            'category' => 'Sembako',
            'sku' => 'BRS-LELE',
            'cost' => '104000',
            'price' => '115000',
        ]);
    }
}
