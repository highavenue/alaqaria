<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PropertyTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $dest_path=Storage::disk('property_img')->getDriver()->getAdapter()->getPathPrefix();

		//delete property_img folder for create and seed new image into it
		File::deleteDirectory($dest_path, true);


		// To manage Property images. If no image was uploaded it will show this default image

		$source_path=Storage::disk('placeholder_img')->getDriver()->getAdapter()->getPathPrefix();
		$no_img=$source_path.'no_img.png';

		$dest_path=Storage::disk('property_img')->getDriver()->getAdapter()->getPathPrefix();

		//delete property_img folder for create and seed new image into it
		File::deleteDirectory($dest_path, true);


		//$dest_file=$dest_path.$new_name;

		File::copy($no_img,$dest_path.'no_img.png');
    }

}