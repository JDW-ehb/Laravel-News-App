<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        // Add a comment to article id 2
        DB::table('comments')->insert([
            //halo article
            [
                'news_id' => 1, // Article id 2
                'user_id' => 19, // User id for the commenter (adjust as needed)
                'comment' => 'that was my childhood ;)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 1, // Article id 2
                'user_id' => 9, // User id for the commenter (adjust as needed)
                'comment' => 'try to beat it on legendary xD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 1, // Article id 2
                'user_id' => 9, // User id for the commenter (adjust as needed)
                'comment' => 'still playing firefight on this little gem :D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //elden ring article
            [
                'news_id' => 2, // Article id 2
                'user_id' => 15, // User id for the second commenter (adjust as needed)
                'comment' => 'how much time did it take me to beat the game? 200 hours T_T',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 2, // Article id 2
                'user_id' => 4, // User id for the second commenter (adjust as needed)
                'comment' => 'i like suffering :)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 2, // Article id 2
                'user_id' => 6, // User id for the second commenter (adjust as needed)
                'comment' => 'when is there a dlc coming out?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //darksouls 3 article
            [
                'news_id' => 3, // Article id 2
                'user_id' => 17, // User id for the second commenter (adjust as needed)
                'comment' => 'ahh death yes..',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //BG2 article
            [
                'news_id' => 4, // Article id 2
                'user_id' => 5, // User id for the second commenter (adjust as needed)
                'comment' => 'one of the best games ever made i dont care what anyone says',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //FNV article
            [
                'news_id' => 5, // Article id 2
                'user_id' => 14, // User id for the second commenter (adjust as needed)
                'comment' => 'still playing this today !!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //skyrim
            [
                'news_id' => 6, // Article id 2
                'user_id' => 15, // User id for the second commenter (adjust as needed)
                'comment' => 'i am waiting for the next skyrim (i am insane)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Assassin's creed unity article
            [
                'news_id' => 7, // Article id 2
                'user_id' => 4, // User id for the second commenter (adjust as needed)
                'comment' => 'had the best parkours in the series.. now we have mirage >:)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Mass Effect article
            [
                'news_id' => 8, // Article id 2
                'user_id' => 7, // User id for the second commenter (adjust as needed)
                'comment' => 'best sci fi game ever made',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //TW3 article
            [
                'news_id' => 9, // Article id 2
                'user_id' => 3, // User id for the second commenter (adjust as needed)
                'comment' => 'toss a coin to your witcher o valley of plenty o valley of plenty o o o', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //minecraft article
            [
                'news_id' => 10, // Article id 2
                'user_id' => 9, // User id for the second commenter (adjust as needed)
                'comment' => 'i LOVE zombie games :DDD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //minecraft article
            [
                'news_id' => 11, // Article id 2
                'user_id' => 19, // User id for the second commenter (adjust as needed)
                'comment' => 'minecraft was my parents TwT (still is)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //bf4 article
            [
                'news_id' => 12, // Article id 2
                'user_id' => 2, // User id for the second commenter (adjust as needed)
                'comment' => 'bf is just better than cod in every way :)', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //TEW
            [
                'news_id' => 13, // Article id 2
                'user_id' => 3, // User id for the second commenter (adjust as needed)
                'comment' => 'I had alot of fun with this game, but when i had to sleep ;)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Harry potter article
            [
                'news_id' => 14, // Article id 2
                'user_id' => 7, // User id for the second commenter (adjust as needed)
                'comment' => 'how do i pass the 7th level?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // battlefront
            [
                'news_id' => 15, // Article id 2
                'user_id' => 14, // User id for the second commenter (adjust as needed)
                'comment' => 'when are they going to make a new one? this was was so great',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //cyberpunk article
            [
                'news_id' => 16, // Article id 2
                'user_id' => 13, // User id for the second commenter (adjust as needed)
                'comment' => 'still have lags on my pc :(',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //csgo article
            [
                'news_id' => 17, // Article id 2
                'user_id' => 5, // User id for the second commenter (adjust as needed)
                'comment' => 'new smokes on the 2 is the best thing ever',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //terrarria
            [
                'news_id' => 18, // Article id 2
                'user_id' => 4, // User id for the second commenter (adjust as needed)
                'comment' => 'minecraft is for losers :D',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
        ]);
    }
}

