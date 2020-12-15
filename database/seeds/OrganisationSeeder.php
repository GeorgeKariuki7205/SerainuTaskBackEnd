<?php

use Illuminate\Database\Seeder;
use App\Organisation;
use Carbon\Carbon;
class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $organisations = [
            [
                'name_of_organisation'=>'Athi Organisation.',
                'description'=>'Athi Organisation.',                
                'country'=> 'Kenya',
                'address'=>'1500 Waiyaki Way',
                'points_person_name'=>'George Athi Points Person',
                'points_person_phone_number'=>'0723568940',
                'points_person_phone_email'=>'athi@mai.com',
                'contract_start_date'=>Carbon::now(),
                'contract_end_date'=>Carbon::now()->addYear(),
            ],
            [
                'name_of_organisation'=>'Tana Organisation.',
                'description'=>'Tana Organisation.',                
                'country'=> 'Uganda',
                'address'=>'1500 James Gichuru Road.',
                'points_person_name'=>'George Tana Points Person',
                'points_person_phone_number'=>'0723568940',
                'points_person_phone_email'=>'athi@mai.com',
                'contract_start_date'=>Carbon::now(),
                'contract_end_date'=>Carbon::now()->addYear(),
            ],  
            [
                'name_of_organisation'=>'Galana Organisation.',
                'description'=>'Galana Organisation.',                
                'country'=> 'Ethiopia',
                'address'=>'1500 Mombasa Road.',
                'points_person_name'=>'George Galana Points Person',
                'points_person_phone_number'=>'0723568940',
                'points_person_phone_email'=>'galana@mai.com',
                'contract_start_date'=>Carbon::now(),
                'contract_end_date'=>Carbon::now()->addYear(),
            ],
            [
                'name_of_organisation'=>'Ewaso-Nyiro Organisation.',
                'description'=>'Ewaso-Nyiro Organisation.',                
                'country'=> 'Tanzania',
                'address'=>'1500 Jogoo Road.',
                'points_person_name'=>'George Ewaso-Nyiro Points Person',
                'points_person_phone_number'=>'0723568940',
                'points_person_phone_email'=>'ewaso@mai.com',
                'contract_start_date'=>Carbon::now(),
                'contract_end_date'=>Carbon::now()->addYear(),
            ],  
            [
                'name_of_organisation'=>'Nzoia Organisation.',
                'description'=>'Nzoia Organisation.',                
                'country'=> 'Rwanda',
                'address'=>'1500 RedHill Road.',
                'points_person_name'=>'George Nzoia Points Person',
                'points_person_phone_number'=>'0723568940',
                'points_person_phone_email'=>'nzoia@mai.com',
                'contract_start_date'=>Carbon::now(),
                'contract_end_date'=>Carbon::now()->addYear(),
            ],                   
        ];        
        
        foreach($organisations as $key => $value){

            Organisation::create($value);            

        }
    }
}
