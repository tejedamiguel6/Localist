<?php

use Illuminate\Database\Seeder;

class SpecialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
        $specials = new \App\Special;

        $specials->description = NULL;
        $specials->business_id = '1';
        $specials->start_date = NULL;
        $specials->end_date =NULL;
        $specials->monday = '3 Dollar Well Drinks';
        $specials->tuesday = '3 Dollar Draft Beers';
        $specials->wednesday = '3 Dollar Bubbles';
        $specials->thursday = '3 Dollar House Wine';
        $specials->friday = '5 Dollar Jameson';
        $specials->saturday = '5 Dollar Fireball';
        $specials->sunday = 'Half Price Bottle of Wine';

        $specials->save();


        $specials = new \App\Special;
        $specials->description = NULL;
        $specials->business_id = '2';
        $specials->start_date = NULL;
        $specials->end_date =NULL;
        $specials->monday = '7 Dollar Shot & a Beer (shot of Benchmark bourbon & a 16 oz. Narragansett)';
        $specials->tuesday = '7 Dollar Whiskey Sour';
        $specials->wednesday = '7 Dollar French 75';
        $specials->thursday = '7 Dollar Moscow Mule';
        $specials->friday = '7 Dollar Hot Toddy';
        $specials->saturday = '7 Dollar Old Fashioned';
        $specials->sunday = '7 Dollar Gimlet';
        
        $specials->save();


        $specials = new \App\Special;

       $specials->description = NULL;
        $specials->business_id = '3';
        $specials->start_date = NULL;
        $specials->end_date =NULL;
        $specials->monday = '5 Dollar Wines';
        $specials->tuesday = '5 Dollar Jameson';
        $specials->wednesday = '4 Dollar Wells';
        $specials->thursday = '2 Dollar Tecate';
        $specials->friday = 'No Special';
        $specials->saturday = 'No Special';
        $specials->sunday = 'No Special';
        
        $specials->save();


        $specials = new \App\Special;

        $specials->description = NULL;
        $specials->business_id = '4';
        $specials->start_date = NULL;
        $specials->end_date =NULL;
        $specials->monday = '4 Dollar Wells';
        $specials->tuesday = '5 Dollar Margaritas';
        $specials->wednesday = '4 Dollar House Wine';
        $specials->thursday = '5 Dollar Dirty Martini';
        $specials->friday = 'No Special';
        $specials->saturday = 'No Special';
        $specials->sunday = 'No Special';
        
        $specials->save();


		$specials = new \App\Special;

        $specials->description = NULL;
        $specials->business_id = '5';
        $specials->start_date = NULL;
        $specials->end_date =NULL;
        $specials->monday = '';
        $specials->tuesday = '';
        $specials->wednesday = '';
        $specials->thursday = '';
        $specials->friday = '';
        $specials->saturday = '';
        $specials->sunday = '';
        
        $specials->save();


		$specials = new \App\Special;

        $specials->description = NULL;
        $specials->business_id = '6';
        $specials->start_date = NULL;
        $specials->end_date =NULL;
        $specials->monday = '';
        $specials->tuesday = '';
        $specials->wednesday = '';
        $specials->thursday = '';
        $specials->friday = '';
        $specials->saturday = '';
        $specials->sunday = '';
        
        $specials->save();



    }
}
