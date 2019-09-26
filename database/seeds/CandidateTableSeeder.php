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
                'name' => 'Nguyễn văn Đức',
                'nationality' => 'china',
                'gender' => 'nam',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 1,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job'=> 'java'
            ],
            [
                'name' => 'Nguyễn Văn Linh',
                'nationality' => 'VN',
                'gender' => 'nam',
                'DoB' =>'2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 3,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job'=> 'java'
            ],
            [
                'name' => 'Nguyễn Thị Lan',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 4,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job'=> 'java'
            ],
            [
                'name' => 'Nguyễn Duy Tuấn',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 5,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job'=> 'php'
            ],
            [
                'name' => 'Phạm thị Hạnh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 5,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Phạm Hồng Hạnh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 6,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'php'
            ],
            [
                'name' => 'Nguyễn Thị Vân Anh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 7,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                 'job' => 'react'
            ],
            [
                'name' => 'Lưu Thùy Linh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 8,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Nguyễn Thị Nhung',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 9,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'php'
            ],
            [
                'name' => 'Trần Thị Phương',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 10,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Trần Lan Anh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 11,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'php'
            ],
            [
                'name' => 'Trần Huy Hiếu',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 12,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'java'
            ],
            [
                'name' => 'Bùi Quang Khánh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 13,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'ruby'
            ],
            [
                'name' => 'Nguyễn Xuân Trường',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 14,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Nguyễn Bảo Huy',
                'nationality' => 'thailand',
                'gender' => 'nam',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 15,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Nguyễn Huy Hùng',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 16,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'js'
            ],
            [
                'name' => 'Nguyễn Kim Hải',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 17,
                'image'=> 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Nguyễn Văn Bảo',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 18,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                 'job' => 'react'
            ],
            [
                'name' => 'Đỗ Tuân',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 19,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Hoàng Tân',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 10,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Phạm Thanh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 21,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Bùi Nhi',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 22,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                 'job' => 'react'
            ],
            [
                'name' => 'Nguyễn Hồng Hạnh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 23,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'python'
            ],
            [
                'name' => 'Trần Trung Thu',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 24,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Trần Văn Hoàng',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 25,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ],
            [
                'name' => 'Trần Đức Huỳnh',
                'nationality' => 'thailand',
                'gender' => 'nữ',
                'DoB' => '2000-01-01',
                'current_add' => 'hn',
                'request' => 'lương cao',
                'exp' => '3 năm kinh nghiêm',
                'location' => 'HN',
                'user_id' => 26,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5',
                'job' => 'react'
            ]
        ]);
    }
}
