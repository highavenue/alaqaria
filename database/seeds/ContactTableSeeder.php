<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;

class ContactTableSeeder extends Seeder {

    public function run()
    {
        DB::table('contacts')->insert([
         	'area_en'=>'Old Salata',
            'area_ar'=>'كتابة المعلومات',
            'street_en'=>'Museum Street',
            'street_ar'=>'كتابة المعلومات',
            'pobox'=>'22311',
            'state_en'=>'Doha',
            'state_ar'=>'كتابة المعلومات',
            'country_en'=>'Qatar',
            'country_ar'=>'قطر',
            'ph1'=>'+974 4408 6000',
            'ph2'=>'+974 4408 6000',
            'fax'=>'+974 4432 5354',
            'email'=>'info@alaqaria.com.qa',
            'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7727.333455093466!2d51.543613632884245!3d25.286309039453954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c513548602dd%3A0x17762202358b4ea3!2sAl+aqaria+building!5e0!3m2!1sar!2sqa!4v1487059069671" width="600" height="350"></iframe>',
            'facebook'=>'',
            'twitter'=>'',
            'linkedin'=>'',
            'instagram'=>'',
            'youtube'=>'',
            'rss'=>'',
            'topbarcaption_en'=>'Luxury Real Estate Specialists Worldwide',
            'topbarcaption_ar'=>'متخصصون العقارات الفاخرة في جميع أنحاء العالم',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
            ]);
    }

}