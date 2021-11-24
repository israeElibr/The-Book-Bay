<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nom' => 'Admin nom',
                'prenom' => 'Admin prenom',
                'email' => 'admin@test.com',
                'adresse' => "adresse de test",
                'date_naissance' => Carbon::now(),
                'is_admin' => true,
                'password' => Hash::make("123456"),
                "phone" => "06 66 20 17 40"
            ],
            [
                'nom' => 'User nom',
                'prenom' => "User prenom",
                'email' => 'user@test.com',
                'adresse' => "adresse de test",
                'date_naissance' => Carbon::now(),
                'password' => Hash::make("azerty"),
                "phone" => "06 66 20 17 40"
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
