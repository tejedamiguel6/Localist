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
        $businesses->image_path = 'images/southernShop.jpg';
        $businesses->business_name = 'The Southern Bar';
        $businesses->user_id = '1';
        $businesses->special_id = '1';
        // $businesses->state_id = '38';
        $businesses->street = '41 N. Lexington Avenue';
        $businesses->city = 'Asheville';
        $businesses->zip ='28804';
        $businesses->phone_num ='828-251-1777';
        $businesses->url = 'http://www.southernkitchenandbar.com/';
        $businesses->contact_first_name = 'John ';
        $businesses->contact_last_name = 'Smith';
        $businesses->email_address = 'jonsmith@aol.com';
        $businesses->save();


        $businesses = new \App\Businesses;

        $businesses->image_path = 'images/imperialShop.jpg';
        $businesses->business_name = 'The Imperial Life';
        $businesses->user_id = '2';
        $businesses->special_id = '2';
        // $businesses->state_id = '38';
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

        $businesses->image_path = 'images/banksShop.jpg';
        $businesses->business_name = 'Banks Ave Bar';
        $businesses->user_id = '3';
        $businesses->special_id = '3';
        // $businesses->state_id = '38';
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

        $businesses->image_path = 'images/vaultShop.jpg';
        $businesses->business_name = 'Ranking Vault Cocktail Lounge';
        $businesses->user_id = '4';
        $businesses->special_id = '4';
        // $businesses->state_id = '38';
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
        $businesses->image_path = 'images/mgShop.jpg';
        $businesses->business_name = 'MG Road Bar and Lounge';
        $businesses->user_id = '5';
        $businesses->special_id = '5';
        // $businesses->state_id = '38';
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
        $businesses->image_path = 'images/desotoShop.jpg';
        $businesses->business_name = 'Desoto Lounge';
        $businesses->user_id = '6';
        $businesses->special_id = '6';
        // $businesses->state_id = '38';
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
