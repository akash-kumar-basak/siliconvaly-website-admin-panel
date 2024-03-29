<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\backend\CompanyModel;

class CompanySettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyModel::insertOrIgnore([
            'id' => '1',
            'favicon' => 'https://source.unsplash.com/random',
            'company_logo' => 'https://source.unsplash.com/random',
            'name' => 'Company Name',
            'title' => 'Website Title',
            'phone_one' => 'Phone No.1',
            'phone_two' => 'Phone No.1',
            'hotline' => 'Hot Line No.',
            'email_one' => 'comapnayemail@gmail.com',
            'email_two' => 'comapnayemail@gmail.com',
            'address_one' => 'Company Address 1',
            'address_two' => 'Company Address 2',
            'website' => 'websitename.com',
            'bin_no' => 'Your bin no',
            'google_map' => 'Google map link',
            'facebook_page_id' => '123456789',
            'meta_keyword' => 'Type Keyword',
            'meta_description' => 'Type Description',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
