<?php

use Illuminate\Database\Seeder;
use App\CVECThreatIndicatorDetected;
class CVECThreatIndicatorDetectedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threatIndicatorDetected = [
            [
                'detectedValue'=>4.5,
                'cvectThreatIndicatorID'=>1,
            ],
            [
                'detectedValue'=>5.0,
                'cvectThreatIndicatorID'=>2,
            ],
            [
                'detectedValue'=>4.00,
                'cvectThreatIndicatorID'=>3,
            ],
            [
                'detectedValue'=>3.00,
                'cvectThreatIndicatorID'=>4,
            ],
            [
                'detectedValue'=>5.00,
                'cvectThreatIndicatorID'=>5,
            ],
            [
                'detectedValue'=>4.50,
                'cvectThreatIndicatorID'=>6,
            ],
            [
                'detectedValue'=>3.00,
                'cvectThreatIndicatorID'=>7,
            ],
            [
                'detectedValue'=>2.00,
                'cvectThreatIndicatorID'=>8,
            ],
            [
                'detectedValue'=>1.00,
                'cvectThreatIndicatorID'=>9,
            ],
            [
                'detectedValue'=>1.20,
                'cvectThreatIndicatorID'=>10,
            ],
            [
                'detectedValue'=>2.0,
                'cvectThreatIndicatorID'=>11,
            ],
            [
                'detectedValue'=>3.0,
                'cvectThreatIndicatorID'=>12,
            ],
            [
                'detectedValue'=>5.0,
                'cvectThreatIndicatorID'=>13,
            ],
            [
                'detectedValue'=>2.3,
                'cvectThreatIndicatorID'=>14,
            ],
            [
                'detectedValue'=>4.3,
                'cvectThreatIndicatorID'=>15,
            ],
            [
                'detectedValue'=>2.3,
                'cvectThreatIndicatorID'=>16,
            ],
            [
                'detectedValue'=>2.3,
                'cvectThreatIndicatorID'=>17,
            ],
            [
                'detectedValue'=>4.3,
                'cvectThreatIndicatorID'=>18,
            ],
            [
                'detectedValue'=>2.3,
                'cvectThreatIndicatorID'=>19,
            ],
            [
                'detectedValue'=>2.3,
                'cvectThreatIndicatorID'=>20,
            ],
            [
                'detectedValue'=>5.00,
                'cvectThreatIndicatorID'=>21,
            ],
            [
                'detectedValue'=>2.00,
                'cvectThreatIndicatorID'=>22,
            ],
            [
                'detectedValue'=>2.00,
                'cvectThreatIndicatorID'=>23,
            ],
            [
                'detectedValue'=>3.50,
                'cvectThreatIndicatorID'=>24,
            ],
            
        ];

        foreach($threatIndicatorDetected as $key => $value){

            CVECThreatIndicatorDetected::create($value);            

        }

    }
}
