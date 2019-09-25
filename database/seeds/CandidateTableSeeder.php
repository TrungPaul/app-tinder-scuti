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
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 1,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'VN',
                'gender' => 'nam',
                'DoB' =>'2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 3,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 4,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 5,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 100,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 6,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 7,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 8,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 9,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 10,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 11,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 12,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 13,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 14,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 15,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 16,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 17,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 18,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 19,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 10,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 21,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 22,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 23,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 24,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 25,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [
                'name' => Str::random(10),
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 26,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ]
        ]);
    }
}
