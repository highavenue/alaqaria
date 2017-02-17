<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;


class TenderRequirementTableSeeder extends Seeder {


    public function run()
    {
    	@include('seed-data/data.php');
        // TestDummy::times(20)->create('App\Post');
        DB::table('tender_requirements')->insert([
        	[
        	'subject_en'=>'How to Tender',
        	'subject_ar'=>'كيفية المناقصة',
        	'desc_en'=>$tender_req_en,
        	'desc_ar'=>$tender_req_ar,
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
        	'subject_en'=>'Terms and Conditions',
        	'subject_ar'=>'الأحكام والشروط',
        	'desc_en'=>$termsandcondition_en,
        	'desc_ar'=>$termsandcondition_ar,
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ]

         //    [
        	// 'image'=>$new_name3,
        	// 'name_en'=>'Abdulaziz Jassim Al-Mufftah',
        	// 'name_ar'=>'اسم',
        	// 'desig_en'=>'Board Member',
        	// 'desig_ar'=>'تعيين',
	        // 'created_at' => Carbon::now()->toDateTimeString(),
	        // 'updated_at' => Carbon::now()->toDateTimeString()
         //    ],

         //    [
        	// 'image'=>$new_name4,
        	// 'name_en'=>'Ahmad Ibrahim Mubarak Darwish',
        	// 'name_ar'=>'اسم',
        	// 'desig_en'=>'Board Member',
        	// 'desig_ar'=>'تعيين',
	        // 'created_at' => Carbon::now()->toDateTimeString(),
	        // 'updated_at' => Carbon::now()->toDateTimeString()
         //    ],

         //    [
        	// 'image'=>$new_name5,
        	// 'name_en'=>'Abdula Ali Al Kuwari',
        	// 'name_ar'=>'اسم',
        	// 'desig_en'=>'Board Member',
        	// 'desig_ar'=>'تعيين',
	        // 'created_at' => Carbon::now()->toDateTimeString(),
	        // 'updated_at' => Carbon::now()->toDateTimeString()
         //    ]

        ]);
    }

}