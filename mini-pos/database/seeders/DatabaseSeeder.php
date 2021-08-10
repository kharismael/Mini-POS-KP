<?php

namespace Database\Seeders;

use App\Models\Supplier;
use App\Models\User;
use App\Models\customer;
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

        // Supplier::create([
        //     'id'=>(string) Str::uuid(),
        //     'name'=>'coba',
        //     'telp'=>'83304923949',
        //     'address'=>'asdjdfnjasd',
        //     'village_id'=>'fe5a14d1-06ec-4e61-8462-83a0c7dd8b20',
        // ]);
        Supplier::create([
            'id' => (string) Str::uuid(),
            'name' => 'tesasd',
            'telp' => '23949829432',
            'address' => 'dfjnjvlafd',
            'village_id' => '00007611-9128-4626-b1e7-7f2eda700590',
        ]);

        customer::create([
            'id' => (string) Str::uuid(),
            'name' => 'Saya test',
            'email' => 'saya@google.com',
            'address' => 'Jl. makmur 119 Surabaya',
            'telp' => '0819998653',
            'village_id' => '0002a5be-d893-4bd9-8e54-eb3b960f9d50'
        ]);
    }
}
