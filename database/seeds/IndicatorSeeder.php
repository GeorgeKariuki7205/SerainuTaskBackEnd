<?php

use Illuminate\Database\Seeder;
use App\Indicator;
class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $indicators = [
            [
                'name'=>'User',
                'description'=>'User Threat Indicator',
                'organisation_id' => 1,                
            ],
            [
                'name'=>'Asset',
                'description'=>'Asset Threat Indicator',  
                'organisation_id' => 1,              
            ],
            [
                'name'=>'Incident',
                'description'=>'Incident Threat Indicator',
                'organisation_id' => 1,                
            ],
            [
                'name'=>'Contuinity',
                'description'=>'Contuinity Threat Indicator', 
                'organisation_id' => 1,               
            ],            
        ];        
        
        foreach($indicators as $key => $value){

            Indicator::create($value);            

        }
    }
}
