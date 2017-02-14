<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;

class AboutTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $source_path=Storage::disk('placeholder_img')->getDriver()->getAdapter()->getPathPrefix();
		$aboutus=$source_path.'aboutus.jpg';
		$comp_overview=$source_path.'companyoverview.jpg';
		$mis_vis=$source_path.'missionandvision.jpg';

		$dest_path=Storage::disk('misc_img')->getDriver()->getAdapter()->getPathPrefix();

		//delete misc_img folder for create and seed new image into it
		File::deleteDirectory($dest_path, true);

		$new_name1=time().'0.jpg';
		$new_name2=time().'1.jpg';
		$new_name3=time().'2.jpg';

		//$dest_file=$dest_path.$new_name;

		File::copy($aboutus,$dest_path.$new_name1);
		File::copy($comp_overview,$dest_path.$new_name2);
		File::copy($mis_vis,$dest_path.$new_name3);

        DB::table('abouts')->insert([
        	[
        	'subject_en' => 'About Us',
	        'subject_ar' => 'معلومات عنا',
	        'desc_en' => '<p>Qatar Real Estate Investment Company, (Alaqaria), is a leading Qatari Private Joint Shareholding Company (PJSC) with a mission to identify and invest in long-term projects contributing to Qatar’s growth. The company was established in 1995.</p>',
	        'desc_ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من ',
	        'image' => $new_name1,
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
            'subject_en' => 'Company Overview',
	        'subject_ar' => 'نبذة عن الشركة',
	        'desc_en' => " <p>The company’s core business is in the real estate investment and development. The Company focuses on developing residential projects in industrial areas Qatar, especially in Dukhan, Mesaieed, and Al Khor. Over the last 17 years, Alaqaria has built a major presence in Qatar and has emerged as one of the country's leading real estate development companies. </p>
<p>In the year 2010 Alaqaria came under the flagship of Barwa Real Estate Company, which is the largest real estate company in Middle East.  In 2012 Alaqaria acquired ASAS Real Estate Company which is owned 100%.</p>
<p>From day one, the company’s mission has been to become a cornerstone in the development of Qatar and its industrial areas, creating lasting value and maximizing returns for the stakeholders.</p>",
	        'desc_ar' => '<p>لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة، ولكن بفضل هؤلاء الأشخاص الذين لا يدركون بأن السعادة لا بد أن نستشعرها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه لا يوجد من يرغب في الحب ونيل المنال ويتلذذ بالآلام، الألم هو الألم ولكن نتيجة لظروف ما قد تكمن السعاده فيما نتحمله من كد وأسي.</p>
	        <p>لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة، ولكن بفضل هؤلاء الأشخاص الذين لا يدركون بأن السعادة لا بد أن نستشعرها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه لا يوجد من يرغب في الحب ونيل المنال ويتلذذ بالآلام، الألم هو الألم ولكن نتيجة لظروف ما قد تكمن السعاده فيما نتحمله من كد وأسي.</p>',
	        'image' => $new_name2,
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
	        ],
            
            [
            'subject_en' => 'Mission, Vision & Values',
	        'subject_ar' => 'الرؤية، الرسالة والقيم',
	        'desc_en' => " <h3>VISION</h3>
<p>Alaqaria's vision is to be in the forefront of development and management in the real estate industry in Qatar-a leader that shapes and influences the quality of residential and commercial developments in the country for the better, to make a substantial difference for our client.</p>
<h3>MISSION</h3>
<p>To create better places in an efficient manner for people to live, work and enjoy</p>
<h3>VALUES</h3>
<ul>
  <li>Entrepreneurship</li>
  <li>Commitment</li>
  <li>Reliability</li>
  <li>Teamwork</li>
  <li>Integrity</li>
</ul>
<p>These values are always present in its day to day operations, business dealings, people, policies, processes, and work environment.</p>",
	        'desc_ar' => '<ul>
		   <li>ها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه لمن.</li>
		   <li> نتيجة لظروف ما قد تكمن السعاده فيما نتحمله م</li>
		   <li>  الألم الذي ربما تنجم عنه بعض ا.</li>
</ul>',
	        'image' => $new_name3,
	        'created_at' => Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon::now()->toDateTimeString()
	        ]

        ]);

    }

}