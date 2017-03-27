<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;

class MsrconstantTableSeeder extends Seeder {

   
    public function run()
    {
    	
        DB::table('msrconstants')->insert([
        	[
        	'documentno'=>'FMD-MSR-01F',
        	'revisionno'=>'02',
        	'revisiondate'=>'2016-03-31',
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ]
           
        ]);
    }

}