<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class EventTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $dest_path=Storage::disk('event_img')->getDriver()->getAdapter()->getPathPrefix();

		//delete misc_img folder for create and seed new image into it
		File::deleteDirectory($dest_path, true);
    }

}