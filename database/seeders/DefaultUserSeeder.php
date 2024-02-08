<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => '+256783204665',
                'password' => Hash::make('12345'),
                'first_name' => 'M-Omulimisa',
                'last_name' => 'Digisave',
                'reg_date' => '1596135415',
                'last_seen' => '1672508491',
                'email' => null,
                'approved' => 1,
                'profile_photo' => 'uploads/2020/09/small/1600649206_585129.png',
                'user_type' => 'Admin',
                'sex' => 'Female',
                'reg_number' => '160040009',
                'country' => 'Uganda',
                'occupation' => 'Computer Science & Engineering student at Islamic University of Technology',
                'profile_photo_large' => 'uploads/2020/09/1600649206_585129.png',
                'phone_number' => '+256783204665',
                'location_lat' => null,
                'location_long' => null,
                'facebook' => 'https://facebook.com/ugnews24',
                'twitter' => 'https://twitter.com/ugnews24',
                'whatsapp' => '+256783204665',
                'linkedin' => 'https://youtube.com/ugnews24',
                'website' => 'https://ugnews24.info',
                'other_link' => '',
                'cv' => 'files/Chairman\'s welcome rev. 1.pdf',
                'language' => 'English',
                'about' => '<p>Muhindo Mubarak is currently a commuter <strong>science</strong> and engineering <strong>student </strong>at Islamic universe of Technology - Daka</p>',
                'address' => 'Bwera, Kasese, Uganda',
                'created_at' => '2020-07-30 15:56:55',
                'updated_at' => '2023-12-08 12:43:45',
                'remember_token' => 'HX1Em1JvSZnJGLcgqDEM5LLixyg6ccJuC3w85Ct1dSPihsgv7c7ZLXstgCQN',
                'avatar' => 'images/1.jpg',
                'name' => 'M-Omulimisa Digisave',
                'campus_id' => '1676688',
                'complete_profile' => 1,
                'title' => 'Mr',
                'dob' => '1994-04-16 21:00:00',
                'intro' => 'a',
                'sacco_id' => null,
                'district_id' => null,
                'subcounty_id' => null,
                'parish_id' => null,
                'village_id' => null,
                'sacco_join_status' => 'Approved',
                'id_front' => null,
                'id_back' => null,
                'status' => 'Active',
                'balance' => 0,
            ],
            [
                'id' => 2,
                'username' => '0759753296',
                'password' => Hash::make('12345'),
                'first_name' => 'M-Omulimisa',
                'last_name' => 'Admin',
                'reg_date' => '1596135415',
                'last_seen' => '1672508491',
                'email' => null,
                'approved' => 1,
                'profile_photo' => 'uploads/2020/09/small/1600649206_585129.png',
                'user_type' => '5',
                'sex' => 'Female',
                'reg_number' => '160040009',
                'country' => 'Uganda',
                'occupation' => 'Computer Science & Engineering student at Islamic University of Technology',
                'profile_photo_large' => 'uploads/2020/09/1600649206_585129.png',
                'phone_number' => '0759753296',
                'location_lat' => null,
                'location_long' => null,
                'facebook' => 'https://facebook.com/ugnews24',
                'twitter' => 'https://twitter.com/ugnews24',
                'whatsapp' => '+256783204665',
                'linkedin' => 'https://youtube.com/ugnews24',
                'website' => 'https://ugnews24.info',
                'other_link' => '',
                'cv' => 'files/Chairman\'s welcome rev. 1.pdf',
                'language' => 'English',
                'about' => '<p>Muhindo Mubarak is currently a commuter <strong>science</strong> and engineering <strong>student </strong>at Islamic universe of Technology - Daka</p>',
                'address' => 'Bwera, Kasese, Uganda',
                'created_at' => '2020-07-30 15:56:55',
                'updated_at' => '2023-12-08 12:43:45',
                'remember_token' => 'HX1Em1JvSZnJGLcgqDEM5LLixyg6ccJuC3w85Ct1dSPihsgv7c7ZLXstgCQN',
                'avatar' => 'images/1.jpg',
                'name' => 'M-Omulimisa Digisave',
                'campus_id' => '1676688',
                'complete_profile' => 1,
                'title' => 'Mr',
                'dob' => '1994-04-16 21:00:00',
                'intro' => 'a',
                'sacco_id' => null,
                'district_id' => null,
                'subcounty_id' => null,
                'parish_id' => null,
                'village_id' => null,
                'sacco_join_status' => 'Approved',
                'id_front' => null,
                'id_back' => null,
                'status' => 'Active',
                'balance' => 0,
            ]
        ]);
    }
}
