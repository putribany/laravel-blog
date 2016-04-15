<?php

use Illuminate\Database\Seeder;

class UsersTbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        [
          "name" => "myuser1",
          "email" => "myuser1@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser2",
          "email" => "myuser2@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser3",
          "email" => "myuser3@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser4",
          "email" => "myuser4@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser5",
          "email" => "myuser5@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser6",
          "email" => "myuser6@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser7",
          "email" => "myuser7@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser8",
          "email" => "myuser8@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser9",
          "email" => "myuser9@email.com",
          "password" => Hash::make("12345678")
        ],
        [
          "name" => "myuser10",
          "email" => "myuser10@email.com",
          "password" => Hash::make("12345678")
        ]
      ];

      DB::table('users')->insert($users);
    }
}
