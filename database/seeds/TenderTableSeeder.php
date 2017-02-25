<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TenderTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $source_path=Storage::disk('tender_docs')->getDriver()->getAdapter()->getPathPrefix();

		
		//delete tender_docs folder for create and seed new image into it
		File::deleteDirectory($source_path, true);
    }

}