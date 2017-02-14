<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;

class ManagementTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        // TestDummy::times(20)->create('App\Post');

        $source_path=Storage::disk('placeholder_img')->getDriver()->getAdapter()->getPathPrefix();
		$mgnt1=$source_path.'mgnt1.jpg';
		$mgnt2=$source_path.'mgnt2.jpg';
		$mgnt3=$source_path.'mgnt3.jpg';
		$mgnt4=$source_path.'mgnt4.jpg';
		$mgnt5=$source_path.'mgnt5.jpg';

		$dest_path=Storage::disk('management_img')->getDriver()->getAdapter()->getPathPrefix();

		//delete misc_img folder for create and seed new image into it
		File::deleteDirectory($dest_path, true);

		$new_name1=time().'1.jpg';
		$new_name2=time().'2.jpg';
		$new_name3=time().'3.jpg';
		$new_name4=time().'4.jpg';
		$new_name5=time().'5.jpg';

		//$dest_file=$dest_path.$new_name;

		File::copy($mgnt1,$dest_path.$new_name1);
		File::copy($mgnt2,$dest_path.$new_name2);
		File::copy($mgnt3,$dest_path.$new_name3);
		File::copy($mgnt4,$dest_path.$new_name4);
		File::copy($mgnt5,$dest_path.$new_name5);

        DB::table('managements')->insert([
        	[
        	'image'=>$new_name1,
        	'name_en'=>'Khalid Bin Khalifa Bin Jassim Al Thani',
        	'name_ar'=>'اسم',
        	'desig_en'=>'Chairman and M.D.',
        	'desig_ar'=>'تعيين',
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
        	'image'=>$new_name2,
        	'name_en'=>'Ghanim-Mohd-A-Al-kuwari',
        	'name_ar'=>'اسم',
        	'desig_en'=>'Board Member',
        	'desig_ar'=>'تعيين',
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
        	'image'=>$new_name3,
        	'name_en'=>'Abdulaziz Jassim Al-Mufftah',
        	'name_ar'=>'اسم',
        	'desig_en'=>'Board Member',
        	'desig_ar'=>'تعيين',
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
        	'image'=>$new_name4,
        	'name_en'=>'Ahmad Ibrahim Mubarak Darwish',
        	'name_ar'=>'اسم',
        	'desig_en'=>'Board Member',
        	'desig_ar'=>'تعيين',
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
        	'image'=>$new_name5,
        	'name_en'=>'Abdula Ali Al Kuwari',
        	'name_ar'=>'اسم',
        	'desig_en'=>'Board Member',
        	'desig_ar'=>'تعيين',
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ]

        ]);
    }

}