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
                'main_business'=> 'PHP, JQuery, Javascript, PyThon,...',
                'company_size'=> 'national',
                'location'=> 'Cầu Giấy, Hà Nội',
                'user_id'=> 200,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'
            ],
            [

                'name'=> 'Trường Hải Auto',
                'current_working'=> 'Thiết kế WEBSITE',
                'main_business'=> 'React-native, PyThon, HTML-CSS,...',
                'company_size'=> 'counry',
                'location'=> 'Development',
                'user_id'=>201 ,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Mojive Press',
                'current_working'=> 'App mobile',
                'main_business'=> 'Reactjs, PyThon, HTML-CSS,...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Đống Đa, Hà Nội',
                'user_id'=> 102,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Công ty Hoàn Cầu',
                'current_working'=> 'Trí tuệ nhân tạo AI',
                'main_business'=> 'Công nghệ AI, kĩ thuật phần mềm,...',
                'company_size'=> 'Hướng đối tượng Nhật Bản',
                'location'=> 'Hải Phòng',
                'user_id'=> 202,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Mindxdream Company',
                'current_working'=> 'Sản phẩm Công nghệ',
                'main_business'=> 'PyThon, React, PHP OOP,...',
                'company_size'=> 'Hướng đối tượng Châu Âu',
                'location'=> 'Hồ Chí Minh city',
                'user_id'=> 203,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Thành Công Group',
                'current_working'=> 'Ứng dụng phần mềm',
                'main_business'=> 'AI, Kĩ thuật phần mềm máy tính',
                'company_size'=> 'Nội Địa',
                'location'=> 'Thái Nguyên',
                'user_id'=> 302,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Vin Group',
                'current_working'=> 'Tập đoàn quốc tế',
                'main_business'=> 'Nhân viên marketing, Giao tiếp tốt,...',
                'company_size'=> 'Định hướng toàn cầu',
                'location'=> 'Hà Nội',
                'user_id'=> 402,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Thế giới di động',
                'current_working'=> 'Bán sản phẩm công nghệ',
                'main_business'=> 'PHP oop, Javascript, Git,...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nôi, Thái Nguyên, Đà Nẵng',
                'user_id'=> 305,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Fpt Shop',
                'current_working'=> 'Bán sản phẩm công nghệ, Lập trình',
                'main_business'=> 'PHP oop, Javascript, Git, Quản lí OPENSOURCE...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nội, Huế, Thái Nguyên',
                'user_id'=> 304,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ],
            [
                'name' => 'Big Crab',
                'current_working'=> 'Nhân viên marketing, Bán hàng',
                'main_business'=> 'Kinh doanh hải sản',
                'company_size'=> 'Đang mở rộng',
                'location'=> 'Bắc Giang',
                'user_id'=> 307,
                'image' => 'https://www.freepik.com/free-photo/man-full-manager-trendy-career_1013658.htm#page=2&query=candidate&position=5'

            ]
        ]);
    }
}
