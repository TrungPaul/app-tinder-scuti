<?php

use Illuminate\Database\Seeder;

// @codingStandardsIgnoreLine
class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name'=> 'Long Thành',
                'current_working'=> 'Maneger',
                'main_business'=> 'Bán Bún',
                'company_size'=> 'national',
                'location'=> 'Nhân viên',
                'user_id'=> 200,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [

                'name'=> 'Con gà',
                'current_working'=> 'Bán gà',
                'main_business'=> 'bán đùi gà',
                'company_size'=> 'counry',
                'location'=> 'Giám đốc',
                'user_id'=>201 ,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 102,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 202,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 203,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 302,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 402,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 305,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 304,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'location'=> 'Giám đốc',
                'user_id'=> 307,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ]
        ]);
    }
}
