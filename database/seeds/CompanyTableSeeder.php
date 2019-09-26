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
                'image' => 'http://lavenderstudio.com.vn/wp-content/uploads/2019/02/word-image-4.png'
            ],
            [

                'name'=> 'Trường Hải Auto',
                'current_working'=> 'Thiết kế WEBSITE',
                'main_business'=> 'React-native, PyThon, HTML-CSS,...',
                'company_size'=> 'counry',
                'location'=> 'Development',
                'user_id'=>201 ,
                'image' => 'http://www.pgt-holdings.com/images/uploads/images/cong-nghe-thong-tin-96ec9.jpg'

            ],
            [
                'name' => 'Mojive Press',
                'current_working'=> 'App mobile',
                'main_business'=> 'Reactjs, PyThon, HTML-CSS,...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Đống Đa, Hà Nội',
                'user_id'=> 202,
                'image' => 'http://anviethouse.vn/wp-content/uploads/2018/09/thi-cong-noi-that-van-phong-tron-goi-1.jpg'

            ],
            [
                'name' => 'Công ty Hoàn Cầu',
                'current_working'=> 'Trí tuệ nhân tạo AI',
                'main_business'=> 'Công nghệ AI, kĩ thuật phần mềm,...',
                'company_size'=> 'Hướng đối tượng Nhật Bản',
                'location'=> 'Hải Phòng',
                'user_id'=> 203,
                'image' => 'https://noithatduonggia.vn/wp-content/uploads/2019/09/hinh-anh-van-phong-cong-ty-dd.jpg'

            ],
            [
                'name' => 'Mindxdream Company',
                'current_working'=> 'Sản phẩm Công nghệ',
                'main_business'=> 'PyThon, React, PHP OOP,...',
                'company_size'=> 'Hướng đối tượng Châu Âu',
                'location'=> 'Hồ Chí Minh city',
                'user_id'=> 204,
                'image' => 'http://image.diaoconline.vn/tin-tuc/2013/04/11/703-truso6.jpg'

            ],
            [
                'name' => 'Fpt Shop',
                'current_working'=> 'Bán sản phẩm công nghệ, Lập trình',
                'main_business'=> 'PHP oop, Javascript, Git, Quản lí OPENSOURCE...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nội, Huế, Thái Nguyên',
                'user_id'=> 205,
                'image' => 'http://istarenglish.edu.vn/vn/wp-content/uploads/2019/03/nganh-cong-nghe-thong-tin-yeu-cau-thanh-thao-ngoai-ngu.jpg'

            ],
            [

                'name'=> 'Trường Hải Auto',
                'current_working'=> 'Thiết kế WEBSITE',
                'main_business'=> 'React-native, PyThon, HTML-CSS,...',
                'company_size'=> 'counry',
                'location'=> 'Development',
                'user_id'=>206 ,
                'image' => 'http://www.pgt-holdings.com/images/uploads/images/cong-nghe-thong-tin-96ec9.jpg'

            ],
            [
                'name' => 'Fpt Shop',
                'current_working'=> 'Bán sản phẩm công nghệ, Lập trình',
                'main_business'=> 'PHP oop, Javascript, Git, Quản lí OPENSOURCE...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nội, Huế, Thái Nguyên',
                'user_id'=> 207,
                'image' => 'http://istarenglish.edu.vn/vn/wp-content/uploads/2019/03/nganh-cong-nghe-thong-tin-yeu-cau-thanh-thao-ngoai-ngu.jpg'

            ],
            [
                'name' => 'Thành Công Group',
                'current_working'=> 'Ứng dụng phần mềm',
                'main_business'=> 'AI, Kĩ thuật phần mềm máy tính',
                'company_size'=> 'Nội Địa',
                'location'=> 'Thái Nguyên',
                'user_id'=> 208,
                'image' => 'http://hoangphamstp.com/upload/images/bang-hieu-bang-chu-led.JPG'

            ],
            [
                'name' => 'Vin Group',
                'current_working'=> 'Tập đoàn quốc tế',
                'main_business'=> 'Nhân viên marketing, Giao tiếp tốt,...',
                'company_size'=> 'Định hướng toàn cầu',
                'location'=> 'Hà Nội',
                'user_id'=> 209,
                'image' => 'https://bkgenetic.edu.vn/wp-content/uploads/2019/03/van-phong-cong-ty-dep-2.jpg'

            ],
            [
                'name' => 'Fpt Shop',
                'current_working'=> 'Bán sản phẩm công nghệ, Lập trình',
                'main_business'=> 'PHP oop, Javascript, Git, Quản lí OPENSOURCE...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nội, Huế, Thái Nguyên',
                'user_id'=> 210,
                'image' => 'http://istarenglish.edu.vn/vn/wp-content/uploads/2019/03/nganh-cong-nghe-thong-tin-yeu-cau-thanh-thao-ngoai-ngu.jpg'

            ],
            [

                'name'=> 'Trường Hải Auto',
                'current_working'=> 'Thiết kế WEBSITE',
                'main_business'=> 'React-native, PyThon, HTML-CSS,...',
                'company_size'=> 'counry',
                'location'=> 'Development',
                'user_id'=>211 ,
                'image' => 'http://www.pgt-holdings.com/images/uploads/images/cong-nghe-thong-tin-96ec9.jpg'

            ],
            [
                'name' => 'Thế giới di động',
                'current_working'=> 'Bán sản phẩm công nghệ',
                'main_business'=> 'PHP oop, Javascript, Git,...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nôi, Thái Nguyên, Đà Nẵng',
                'user_id'=> 212,
                'image' => 'http://www.dccd.vn/public/uploads/images/images/03(9).jpg'

            ],
            [
                'name' => 'Fpt Shop',
                'current_working'=> 'Bán sản phẩm công nghệ, Lập trình',
                'main_business'=> 'PHP oop, Javascript, Git, Quản lí OPENSOURCE...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nội, Huế, Thái Nguyên',
                'user_id'=> 213,
                'image' => 'http://istarenglish.edu.vn/vn/wp-content/uploads/2019/03/nganh-cong-nghe-thong-tin-yeu-cau-thanh-thao-ngoai-ngu.jpg'

            ],
            
            [
                'name' => 'Big Crab',
                'current_working'=> 'Nhân viên marketing, Bán hàng',
                'main_business'=> 'Kinh doanh hải sản',
                'company_size'=> 'Đang mở rộng',
                'location'=> 'Bắc Giang',
                'user_id'=> 214,
                'image' => 'https://img.lovepik.com/photo/50079/2926.jpg_wh860.jpg'

            ],
            [
                'name' => 'Vin Group',
                'current_working'=> 'Tập đoàn quốc tế',
                'main_business'=> 'Nhân viên marketing, Giao tiếp tốt,...',
                'company_size'=> 'Định hướng toàn cầu',
                'location'=> 'Hà Nội',
                'user_id'=> 215,
                'image' => 'https://bkgenetic.edu.vn/wp-content/uploads/2019/03/van-phong-cong-ty-dep-2.jpg'

            ],
            [
                'name' => 'Fpt Shop',
                'current_working'=> 'Bán sản phẩm công nghệ, Lập trình',
                'main_business'=> 'PHP oop, Javascript, Git, Quản lí OPENSOURCE...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Hà Nội, Huế, Thái Nguyên',
                'user_id'=> 216,
                'image' => 'http://istarenglish.edu.vn/vn/wp-content/uploads/2019/03/nganh-cong-nghe-thong-tin-yeu-cau-thanh-thao-ngoai-ngu.jpg'

            ],
            [
                'name'=> 'Long Thành',
                'current_working'=> 'Maneger',
                'main_business'=> 'PHP, JQuery, Javascript, PyThon,...',
                'company_size'=> 'national',
                'location'=> 'Cầu Giấy, Hà Nội',
                'user_id'=> 217,
                'image' => 'http://lavenderstudio.com.vn/wp-content/uploads/2019/02/word-image-4.png'
            ],
            [

                'name'=> 'Trường Hải Auto',
                'current_working'=> 'Thiết kế WEBSITE',
                'main_business'=> 'React-native, PyThon, HTML-CSS,...',
                'company_size'=> 'counry',
                'location'=> 'Development',
                'user_id'=>218 ,
                'image' => 'http://www.pgt-holdings.com/images/uploads/images/cong-nghe-thong-tin-96ec9.jpg'

            ],
            [
                'name' => 'Mojive Press',
                'current_working'=> 'App mobile',
                'main_business'=> 'Reactjs, PyThon, HTML-CSS,...',
                'company_size'=> 'Toàn quốc',
                'location'=> 'Đống Đa, Hà Nội',
                'user_id'=> 219,
                'image' => 'http://anviethouse.vn/wp-content/uploads/2018/09/thi-cong-noi-that-van-phong-tron-goi-1.jpg'

            ],
            [
                'name' => 'Công ty Hoàn Cầu',
                'current_working'=> 'Trí tuệ nhân tạo AI',
                'main_business'=> 'Công nghệ AI, kĩ thuật phần mềm,...',
                'company_size'=> 'Hướng đối tượng Nhật Bản',
                'location'=> 'Hải Phòng',
                'user_id'=> 220,
                'image' => 'https://noithatduonggia.vn/wp-content/uploads/2019/09/hinh-anh-van-phong-cong-ty-dd.jpg'

            ]
        ]);
    }
}
