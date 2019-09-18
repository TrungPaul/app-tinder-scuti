<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidates')->insert([
            [
                'name' => Str::random(10),
                'nationality' => 'china',
                'gender' => 'nam',
                'DoB' => '2000-01-01',
                'contact_id' => 2,
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'condition_id' => 2,
                'user_id' => 1,
                'candidate_like_id' => 2,
                'candidate_dislike_id' => 1
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'VN',
                'gender' => 'nam',
                'DoB' =>'2000-01-01',
                'contact_id' => 1,
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'condition_id' => 2,
                'user_id' => 3,
                'candidate_like_id' => 4,
                'candidate_dislike_id' => 3
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'contact_id' => 3,
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'condition_id' => 2,
                'user_id' => 5,
                'candidate_like_id' => 5,
                'candidate_dislike_id' => 2
            ]
        ]);
    }
}
