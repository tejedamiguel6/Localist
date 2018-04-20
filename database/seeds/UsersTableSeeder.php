<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = new \App\User;
        $users->id = '1';
        $users->user_name = 'The Southern';
        $users->email = 'example1@aol.com';
        $users->password = bcrypt('secret');
        $users->first_name = 'Miguel';
        $users->last_name = 'Tejeda';
        $users->city = NULL;
        $users->role_id ='3';

        $users->save();



        $users = new \App\User;
        $users->id = '2';
        $users->user_name = 'Imperial LIfe';
        $users->email = 'example2@aol.com';
        $users->password = bcrypt('secret');
        $users->first_name = 'Miguel';
        $users->last_name = 'Tejeda';
        $users->city = NULL;
        $users->role_id ='3';

        $users->save();



       	$users = new \App\User;
        $users->id = '3';
        $users->user_name = 'Banks Ave';
        $users->email = 'example3@aol.com';
        $users->password = bcrypt('secret');
        $users->first_name = 'Miguel';
        $users->last_name = 'Tejeda';
        $users->city = NULL;
        $users->role_id ='3';

        $users->save();



        $users = new \App\User;
        $users->id = '4';
        $users->user_name = 'The Vault';
        $users->email = 'example4@aol.com';
        $users->password = bcrypt('secret');
        $users->first_name = 'Miguel';
        $users->last_name = 'Tejeda';
        $users->city = NULL;
        $users->role_id ='3';

        $users->save();



      	$users = new \App\User;
        $users->id = '5';
        $users->user_name = 'MG Road';
        $users->email = 'example5@aol.com';
        $users->password = bcrypt('secret');
        $users->first_name = 'Miguel';
        $users->last_name = 'Tejeda';
        $users->city = NULL;
        $users->role_id ='3';

        $users->save();




        $users = new \App\User;
        $users->id = '6';
        $users->user_name = 'Desoto';
        $users->email = 'example6@aol.com';
        $users->password = bcrypt('secret');
        $users->first_name = 'Miguel';
        $users->last_name = 'Tejeda';
        $users->city = NULL;
        $users->role_id ='3';

        $users->save();


    }
}
