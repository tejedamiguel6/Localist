<?php

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $businesses = new \App\Businesses;
        $businesses->image_path = 'https://res.cloudinary.com/simpleview/image/upload/crm/asheville/Southern-Banner-4_1C396BD0-BB97-4185-B32AA2F579212216_58eeb8c0-780b-4c55-adf271e409ac90c1.jpg';
        $businesses->business_name = 'The Southern bar and Kitchen';
        $businesses->state_id = '38';
        $businesses->street = '41 N. Lexington Avenue Asheville';
        $businesses->city = 'Asheville';
        $businesses->zip ='28804';
        $businesses->phone_num ='828-251-1777';
        $businesses->url = 'http://www.southernkitchenandbar.com/';
        $businesses->contact_first_name = 'John ';
        $businesses->contact_last_name = 'Smith';
        $businesses->email_address = 'jonsmith@aol.com';
        $businesses->save();


        $businesses = new \App\Businesses;

        $businesses->image_path = 'https://res.cloudinary.com/odysys-llc/image/upload/c_thumb,g_custom,w_1000/v1/blog-posts/6833/zb8jfhfqtmb0nasr9eb8';
        $businesses->business_name = 'The Imperial Life';
        $businesses->state_id = '38';
        $businesses->street = '48 College Street';
        $businesses->city = ', Asheville';
        $businesses->zip = '28801';
        $businesses->phone_num ='828-254-8980';
        $businesses->url = 'https://imperialbarasheville.com/';
        $businesses->contact_first_name = 'kevin ';
        $businesses->contact_last_name = 'Smith';
        $businesses->email_address = 'kevinsmith@aol.com';
        $businesses->save();



        $businesses = new \App\Businesses;

        $businesses->image_path = 'https://s3-media2.fl.yelpcdn.com/bphoto/XsI_yXFA3VY0FdJWaybBeg/o.jpg';
        $businesses->business_name = 'Banks Ave Bar';
        $businesses->state_id = '38';
        $businesses->street = '32 Banks Ave';
        $businesses->city = ', Asheville';
        $businesses->zip = '28801';
        $businesses->phone_num ='828-785-1458';
        $businesses->url = 'https://www.facebook.com/banksavebar/';
        $businesses->contact_first_name = 'Scott ';
        $businesses->contact_last_name = 'Smith';
        $businesses->email_address = 'scott@aol.com';
        $businesses->save();



        $businesses = new \App\Businesses;
        $businesses->image_path = 'https://lolo-production.s3.amazonaws.com/uploads/experie38e_certificate/image/99/standard_6057485485_7fea3f7e21_b.jpg';
        $businesses->business_name = 'Ranking Vault Cocktail Lounge';
        $businesses->state_id = '38';
        $businesses->street = '7 Ranking Ave';
        $businesses->city = ', Asheville';
        $businesses->zip = '28801';
        $businesses->phone_num ='828-254-4993';
        $businesses->url = 'http://rankinvault.com/';
        $businesses->contact_first_name = 'vaults';
        $businesses->contact_last_name = 'johnson';
        $businesses->email_address = 'vault@aol.com';
        $businesses->save();



		$businesses = new \App\Businesses;
        $businesses->image_path = 'https://static1.squarespace.com/static/57696e76d482e9466c2c6032/t/5a79d54671c10b127645a181/1517933926088/MGPanna-7.jpg?format=2500w';
        $businesses->business_name = 'MG Road Bar and Lounge';
        $businesses->state_id = '38';
        $businesses->street = '19 Wall St';
        $businesses->city = ', Asheville';
        $businesses->zip = '28801';
        $businesses->phone_num = '828-254-4363';
        $businesses->url = 'http://www.mgroadlounge.com/';
        $businesses->contact_first_name = 'mgroad management';
        $businesses->contact_last_name = 'management';
        $businesses->email_address = 'mgroad@aol.com';
        $businesses->save();



		$businesses = new \App\Businesses;
        $businesses->image_path = 'http://2.bp.blogspot.com/_uobQP1VcwGc/TEmkGvVs8cI/AAAAAAAAAIA/wulHCFHjlQ0/s1600/DSCN2324.JPG';
        $businesses->business_name = 'Desoto Lounge';
        $businesses->state_id = '38';
        $businesses->street = '504 Haywood Rd';
        $businesses->city = ', Asheville';
        $businesses->zip = '28806';
        $businesses->phone_num = '828-254-4363';
        $businesses->url = ' http://www.desotolounge.com/';
        $businesses->contact_first_name = 'desoto management';
        $businesses->contact_last_name = 'management';
        $businesses->email_address = 'desoto@aol.com';
        $businesses->save();
    }
 
}
