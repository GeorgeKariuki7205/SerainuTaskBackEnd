<?php

use Illuminate\Database\Seeder;
use App\CVECThreatIndicatorValidated;
class CVECThreatIndicatorValidatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $threatIndicatorsValidated = [
            [
                'validatedValue'=>3.75,
                'cvectThreatIndicatorID'=>1,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>2,
            ],
            [
                'validatedValue'=>3.25,
                'cvectThreatIndicatorID'=>3,
            ],
            [
                'validatedValue'=>2.25,
                'cvectThreatIndicatorID'=>4,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>5,
            ],
            [
                'validatedValue'=>3.75,
                'cvectThreatIndicatorID'=>6,
            ],
            [
                'validatedValue'=>2.25,
                'cvectThreatIndicatorID'=>7,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>8,
            ],
            [
                'validatedValue'=>0.25,
                'cvectThreatIndicatorID'=>9,
            ],
            [
                'validatedValue'=>0.45,
                'cvectThreatIndicatorID'=>10,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>11,
            ],
            [
                'validatedValue'=>2.25,
                'cvectThreatIndicatorID'=>12,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>13,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>14,
            ],
            [
                'validatedValue'=>3.55,
                'cvectThreatIndicatorID'=>15,
            ],
            [
                'validatedValue'=>3.55,
                'cvectThreatIndicatorID'=>15,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>16,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>17,
            ],
            [
                'validatedValue'=>3.55,
                'cvectThreatIndicatorID'=>18,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>19,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>20,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>21,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>22,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>23,
            ],
            [
                'validatedValue'=>2.75,
                'cvectThreatIndicatorID'=>24,
            ],


            // ! second. 
            [
                'validatedValue'=>3.75,
                'cvectThreatIndicatorID'=>25,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>26,
            ],
            [
                'validatedValue'=>3.25,
                'cvectThreatIndicatorID'=>27,
            ],
            [
                'validatedValue'=>2.25,
                'cvectThreatIndicatorID'=>28,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>29,
            ],
            [
                'validatedValue'=>3.75,
                'cvectThreatIndicatorID'=>30,
            ],
            [
                'validatedValue'=>2.25,
                'cvectThreatIndicatorID'=>31,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>32,
            ],
            [
                'validatedValue'=>0.25,
                'cvectThreatIndicatorID'=>33,
            ],
            [
                'validatedValue'=>0.45,
                'cvectThreatIndicatorID'=>34,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>35,
            ],
            [
                'validatedValue'=>2.25,
                'cvectThreatIndicatorID'=>36,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>37,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>38,
            ],
            [
                'validatedValue'=>3.55,
                'cvectThreatIndicatorID'=>39,
            ],
            [
                'validatedValue'=>3.55,
                'cvectThreatIndicatorID'=>15,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>40,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>41,
            ],
            [
                'validatedValue'=>3.55,
                'cvectThreatIndicatorID'=>42,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>43,
            ],
            [
                'validatedValue'=>1.55,
                'cvectThreatIndicatorID'=>44,
            ],
            [
                'validatedValue'=>4.25,
                'cvectThreatIndicatorID'=>45,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>46,
            ],
            [
                'validatedValue'=>1.25,
                'cvectThreatIndicatorID'=>47,
            ],
            [
                'validatedValue'=>2.75,
                'cvectThreatIndicatorID'=>48,
            ],

           
        ];
        foreach($threatIndicatorsValidated as $key => $value){

            CVECThreatIndicatorValidated::create($value);            

        }
    }
}
