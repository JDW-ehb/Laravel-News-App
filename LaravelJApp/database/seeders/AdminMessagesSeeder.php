<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMessagesSeeder extends Seeder
{
    public function run()
    {
        // Insert messages to admins
        DB::table('contact_form_entries')->insert([
            [
                'name' => 'jane', // Replace with the ID of the admin user
                'email' => 'jane.debruin@gmail.com',
                'description' => 'unable to send comments ?',
                'message' => 'dear staff of gamenews, Why am i unable to send comments ?.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'julie', // Replace with the ID of another admin user
                'description' => 'interview with one of your journalist',
                'email' => 'julie.vanbrugge@gmail.com',
                'message' => 'Dear staff of gamenews, I wanted to contact you to ask if i could interview one of your journalist to see how journalism in the game industry works. You can contact me on my email: julie.vanbrugge@gmail.com. Thank you in advance. Julie Van Brugge',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more messages as needed
        ]);
    }
}
