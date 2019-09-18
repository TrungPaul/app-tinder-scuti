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
                'contact_id'=> 1,
                'jd_id'=> 1,
                'location'=> 'Nhân viên',
                'company_like_id'=> 1,
                'company_dislike_id'=> 1,
                'user_id'=> 1,
                'created_at'=> null,
                'updated_at'=> null
            ],
            [
               
                'name'=> 'Con gà',
                'current_working'=> 'Bán gà',
                'main_business'=> 'bán đùi gà',
                'company_size'=> 'counry',
                'contact_id'=> 1,
                'jd_id'=> 1,
                'location'=> 'Giám đốc',
                'company_like_id'=> 1,
                'company_dislike_id'=> 1,
                'user_id'=> 1,
                'created_at'=> null,
                'updated_at'=> null
            ],
            [
                'name' => Str::random(10),
                'current_working'=> 'Bán Cua',
                'main_business'=> 'bán càng cua',
                'company_size'=> 'aaaa',
                'contact_id'=> 1,
                'jd_id'=> 1,
                'location'=> 'Giám đốc',
                'company_like_id'=> 1,
                'company_dislike_id'=> 1,
                'user_id'=> 1,
                'created_at'=> null,
                'updated_at'=> null
            ]
        ]);
    }
}
