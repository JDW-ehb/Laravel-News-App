<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    public function run()
    {
        $faqs = [
            [
                'question' => 'Why when there is a leak about a game it takes time for an article to appear ?',
                'answer' => 'As journalist we analyse each of our sources and so it takes time to verify those sources.',
            ],
            [
                'question' => 'How can I contact customer support?',
                'answer' => 'You can contact our customer support team by goign on the contact page avaible on the navigationbar on top of your page.',
            ],
            [
                'question' => 'How can I become a journalist to post articles?',
                'answer' => 'You can contact our customer support team and apply as one. You should be older than 18 years old and have a good english level.',
            ],
            // Add more FAQs as needed
        ];

        // Insert the FAQs into the 'faqs' table
        foreach ($faqs as $faq) {
            DB::table('faqs')->insert($faq);
        }
    }
}