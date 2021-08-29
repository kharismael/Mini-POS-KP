<?php

namespace Database\Seeders;

use App\Models\Supplier;
use App\Models\User;
use App\Models\customer;
use App\Models\product;
use App\Models\purchase;
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

        Supplier::create([
            'id' => '3c5e68c4-0115-44e8-9aa9-c5c8a54e0e8d',
            'name' => 'coba',
            'telp' => '83304923949',
            'address' => 'asdjdfnjasd',
            'village_id' => '0baabea0-9282-4150-b72e-84c7b8580892',
        ]);
        Supplier::create([
            'id' => (string) Str::uuid(),
            'name' => 'tesasd',
            'telp' => '23949829432',
            'address' => 'dfjnjvlafd',
            'village_id' => '0bab70b0-0ff1-4854-8ccf-80c99de9671c',
        ]);

        customer::create([
            'id' => (string) Str::uuid(),
            'name' => 'Saya test',
            'email' => 'saya@google.com',
            'address' => 'Jl. makmur 119 Surabaya',
            'telp' => '0819998653',
            'village_id' => '0002a5be-d893-4bd9-8e54-eb3b960f9d50'
        ]);

        $date = Carbon::createFromFormat('m/d/Y', '08/23/2021');
        purchase::create([
            'id' => (string) Str::uuid(),
            'supplier_id' => '3c5e68c4-0115-44e8-9aa9-c5c8a54e0e8d',
            'invoice' => '82723',
            'price_total' => null,
            'transaction_date' => $date,
        ]);
    }
}
