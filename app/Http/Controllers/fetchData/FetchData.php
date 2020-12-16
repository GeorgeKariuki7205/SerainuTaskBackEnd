<?php

namespace App\Http\Controllers\fetchData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\CVECThreatIndicatorDetected;
use App\CVECThreatIndicator;
use App\CVECThreatIndicatorValidated;
use App\Indicator;
use App\IndicatorRemediationActivities;

class FetchData extends Controller
{
    //
    public function fetchData(){

        // ! getting all the Indicators.

        $allIndicators = Indicator::all();

        $responseData = array();
        $indicators = array();
        foreach ($allIndicators as $allIndicator) {
            # code...
            $indicatorToPushToResponse = array();
            $indicatorDetails = array();
            $indicatorDetails['name'] = $allIndicator->name;
            $indicatorDetails['description']= $allIndicator->description;

            $indicatorToPushToResponse['indicatorDetails'] = $indicatorDetails;

            // ! getting CVECThreatIndicators

            $CVECThreatIndicators = $allIndicator->indicatorHasManyCVECThreatIndicators;

            $CVECThreatIndicatorsCombinationArray = array();
            foreach ($CVECThreatIndicators as $CVECThreatIndicator) {
                # code...
                $CVECThreatIndicatorArray = array();
                $CVECThreatIndicatorArray['uniqueIdentifier'] = $CVECThreatIndicator->uniqueIdentifier;
                $CVECThreatIndicatorArray['name'] = $CVECThreatIndicator->name;

                // ! detected. 
                $detacteds = $CVECThreatIndicator->CVECThreatIndicatorHasManyCVECThreatIndicatorDetected;

                foreach ($detacteds as $detacted) {
                    # code...
                    $CVECThreatIndicatorArray['detacted'] = $detacted->detectedValue;
                    
                }

                // ! validated. 

                $validateds = $CVECThreatIndicator->CVECThreatIndicatorHasManyCVECThreatIndicatorValidated;
                
                foreach ($validateds as $validated) {
                    # code...
                    $CVECThreatIndicatorArray['validated'] = $validated->validatedValue;
                }

                array_push($CVECThreatIndicatorsCombinationArray,$CVECThreatIndicatorArray);
            }
            
            $indicatorToPushToResponse['CVECThreatIndicators'] = $CVECThreatIndicatorsCombinationArray;
            array_push($indicators,$indicatorToPushToResponse);

        }

        $responseData['indicators'] = $indicators;

        return $responseData;
    }
}
