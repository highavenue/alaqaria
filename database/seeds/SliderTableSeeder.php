<?php

use Illuminate\Database\Seeder;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;
class SliderTableSeeder extends Seeder {

    public function run()
    {
		$source_path=Storage::disk('placeholder_img')->getDriver()->getAdapter()->getPathPrefix();
		$source_file=$source_path.'slider.jpg';
		$dest_path=Storage::disk('slider_img')->getDriver()->getAdapter()->getPathPrefix();
		
		//delete slider_img folder for create and seed new image into it
		File::deleteDirectory($dest_path, true);

		$new_name=time().'.jpg';
		$dest_file=$dest_path.$new_name;
		File::copy($source_file,$dest_file);
		//Storage::copy($source_file, $dest_file);
        // TestDummy::times(20)->create('App\Post');

        DB::table('sliders')->insert([
        	'image' => $new_name,
	        'title_en' => '',
	        'title_ar' => '',
	        'subject_en' => '',
	        'subject_ar' => '',
	        'linktext_en' => '',
	        'linktext_ar' => '',
	        'link'=> '',
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ]);
    }

}