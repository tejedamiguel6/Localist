<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = new \App\Places;
        $places->image_path = 'https://res.cloudinary.com/simpleview/image/upload/crm/asheville/Southern-Banner-4_1C396BD0-BB97-4185-B32AA2F579212216_58eeb8c0-780b-4c55-adf271e409ac90c1.jpg';
        $places->business_name = 'The Southern bar and Kitchen';
        $places->address = '41 N. Lexington Avenue Asheville, NC 28801';
        $places->phone_num ='828-251-1777';
        $places->url = 'http://www.southernkitchenandbar.com/';
        $places->save();


        $places = new \App\Places;
        $places->image_path = 'https://res.cloudinary.com/odysys-llc/image/upload/c_thumb,g_custom,w_1000/v1/blog-posts/6833/zb8jfhfqtmb0nasr9eb8';
        $places->business_name = 'The Imperial Life';
        $places->address = '48 College Street, Asheville, NC, 28801 (828) 254 8980';
        $places->phone_num ='828-254-8980';
        $places->url = 'https://imperialbarasheville.com/';
        $places->save();


        $places = new \App\Places;
        $places->image_path = 'https://s3-media2.fl.yelpcdn.com/bphoto/XsI_yXFA3VY0FdJWaybBeg/o.jpg';
        $places->business_name = 'Banks Ave Bar';
        $places->address = '32 Banks Ave, Asheville, NC 28801';
        $places->phone_num ='828-785-1458';
        $places->url = 'https://www.facebook.com/banksavebar/';
        $places->save();


        $places = new \App\Places;
        $places->image_path = 'https://lolo-production.s3.amazonaws.com/uploads/experience_certificate/image/99/standard_6057485485_7fea3f7e21_b.jpg';
        $places->business_name = 'Ranking Vault Cocktail Lounge';
        $places->address = '7 Rankin Ave, Asheville, NC 28801';
        $places->phone_num = '828-254-4993';
        $places->url = 'http://rankinvault.com/';
        $places->save();


		$places = new \App\Places;
        $places->image_path = 'https://static1.squarespace.com/static/57696e76d482e9466c2c6032/t/5a79d54671c10b127645a181/1517933926088/MGPanna-7.jpg?format=2500w';
        $places->business_name = 'MG Road Bar and Lounge';
        $places->address = '19 Wall St, Asheville, NC 28801';
        $places->phone_num = '828-254-4363';
        $places->url = 'http://www.mgroadlounge.com/';
        $places->save();


		$places = new \App\Places;
        $places->image_path = 'http://2.bp.blogspot.com/_uobQP1VcwGc/TEmkGvVs8cI/AAAAAAAAAIA/wulHCFHjlQ0/s1600/DSCN2324.JPG';
        $places->business_name = 'Desoto Lounge';
        $places->address = '504 Haywood Rd, Asheville, NC 28806';
        $places->phone_num = '828-254-4363';
        $places->url = ' http://www.desotolounge.com/';
        $places->save();



    }


   
}
