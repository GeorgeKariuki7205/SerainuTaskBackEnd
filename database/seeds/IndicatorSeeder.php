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
            ],
            [
                'name'=>'Asset',
                'description'=>'Asset Threat Indicator',                
            ],
            [
                'name'=>'Incident',
                'description'=>'Incident Threat Indicator',                
            ],
            [
                'name'=>'Contuinity',
                'description'=>'Contuinity Threat Indicator',                
            ],            
        ];        
        
        foreach($indicators as $key => $value){

            Indicator::create($value);            

        }
    }
}
