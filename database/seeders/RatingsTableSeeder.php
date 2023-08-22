<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratingRecords = [
            ['id'=>1, 'user_id'=>1, 'post_id'=>1, 'review'=>'very good post', 'rating'=>4, 'status'=>0],
            ['id'=>2, 'user_id'=>2, 'post_id'=>2, 'review'=>'very bad post', 'rating'=>1, 'status'=>0],
            ['id'=>3, 'user_id'=>3, 'post_id'=>1, 'review'=>'very goot post', 'rating'=>4, 'status'=>0],
        ];
        Rating::insert($ratingRecords);
    }
}
