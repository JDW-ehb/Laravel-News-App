<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

        // Insert multiple user records
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@ehb.be',
                'password' => Hash::make('Password!321'),
                'isAdmin' => 1,
            ],
            [
                'name' => 'Evelyn Hartwell',
                'email' => 'evelyn.hartwell@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Marcus Sterling',
                'email' => 'marcus.sterling@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Clara Redwood',
                'email' => 'clara.redwood@gmail.com',
                'password' => Hash::make('UserPassword3'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Julian Blackwood',
                'email' => 'julian.blackwood@gmail.com',
                'password' => Hash::make('UserPassword4'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Amelia Vale',
                'email' => 'amelia.vale@gmail.com',
                'password' => Hash::make('UserPassword5'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Theodore Bright',
                'email' => 'theodore.bright@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Isabella Thorn',
                'email' => 'isabella.thorn@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Nathaniel Holloway',
                'email' => 'nathaniel.holloway@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Sophia Lancaster',
                'email' => 'sophia.lancaster@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Benjamin Crest',
                'email' => 'benjamin.crest@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Olivia Marlowe',
                'email' => 'olivia.marlowe@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Alexander Fairchild',
                'email' => 'alexander.fairchild@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Charlotte Greenwood',
                'email' => 'charlotte.greenwood@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Henry Wilder',
                'email' => 'henry.wilder@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Elizabeth Morrow',
                'email' => 'elizabeth.morrow@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'William Rosewood',
                'email' => 'william.rosewood@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Grace Nightingale',
                'email' => 'grace.nightingale@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'James Fieldstone',
                'email' => 'james.fieldstone@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Lily Harrow',
                'email' => 'lily.harrow@gmail.com',
                'password' => Hash::make('UserPassword1'),
                'isAdmin' => 0,
            ],
            [
                'name' => 'Edward Ravenswood',
                'email' => 'edward.ravenswood@gmail.com',
                'password' => Hash::make('UserPassword2'),
                'isAdmin' => 0,
            ],
        ]);
            
    }
}
