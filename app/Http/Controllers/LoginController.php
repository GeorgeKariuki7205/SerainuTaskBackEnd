<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Organisation;
use App\User;
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        $responseData = array();
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            
            $responseData['loginStatus'] = true;
            $user = Auth::user();
            $userDetails = array();
            $userDetails['name'] = $user->name;
            $userDetails['id'] = $user->id;
            $userDetails['email'] = $user->email;
            $userDetails['organisationName'] = $user->userbelongsToOrganisation->name;

            $responseData['userDetails'] = $userDetails;
            $oranisationDetails = array();

            $organiations = Organisation::where('id',$user->organisation_id)->get();
            $indicators = array();
            foreach ($organiations as $organiation) {
                # code...
                $oranisationDetails['name_of_organisation'] = $organiation->name_of_organisation;
                $oranisationDetails['description'] = $organiation->description;
                $oranisationDetails['country'] = $organiation->country;
                $oranisationDetails['address'] = $organiation->address;
                $oranisationDetails['points_person_name'] = $organiation->points_person_name;
                $oranisationDetails['points_person_phone_number'] = $organiation->points_person_phone_number;
                $oranisationDetails['points_person_phone_email'] = $organiation->points_person_phone_email;
                $oranisationDetails['contract_start_date'] = $organiation->contract_start_date;
                $oranisationDetails['contract_end_date'] = $organiation->contract_end_date;
            }

            $responseData['oranisationDetails'] = $oranisationDetails;

            $userRoles = array();
            $userRoles['roles'] = $user->getRoleNames();

            $responseData['userRoles'] = $userRoles;

            $allIndicators = $organiation->organisationHasManyIndicator;
            
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


        // ! getting all users and their roles. 

        $users = User::where('organisation_id',$user->organisation_id)->get();
        $allUsers = array();

        foreach ($users as $userRegistered) {
            # code...
            $userDetails = array();
            $userDetails['name'] = $userRegistered->name;
            $userDetails['email'] = $userRegistered->email;
            $userDetails['id'] = $userRegistered->id;
            $userDetails['role'] = $userRegistered->getRoleNames();
            array_push($allUsers,$userDetails);
        }
        $responseData['allUsers'] = $allUsers;


        return $responseData;
            
             
        }
        else{
            $responseData['loginStatus'] = false;
            return $responseData;
            
        }
    }
}