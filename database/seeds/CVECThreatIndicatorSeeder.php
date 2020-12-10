<?php

use Illuminate\Database\Seeder;
use App\CVECThreatIndicator;
class CVECThreatIndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threatIndicators = [
            [
                'uniqueIdentifier'=>'KIT.1',
                'name'=> 'Unauthorised Devices',
                'description'=>'Unauthorised Devices',
                'indicatorsId'=>1,
            ],
            [
                'uniqueIdentifier'=>'KIT.2',
                'name'=> 'Unauthorised Software',
                'description'=>'Unauthorised Software',
                'indicatorsId'=>1,
            ],
            [
                'uniqueIdentifier'=>'KIT.3',
                'name'=> 'Malware Presence',
                'description'=>'Malware Presence',
                'indicatorsId'=>1,
            ],
            [
                'uniqueIdentifier'=>'KIT.4',
                'name'=> 'Files And Services Abuse',
                'description'=>'Files And Services Abuse',
                'indicatorsId'=>1,
            ],
            [
                'uniqueIdentifier'=>'KIT.5',
                'name'=> 'Vulnerabilities And Exploits',
                'description'=>'Vulnerabilities And Exploits',
                'indicatorsId'=>1,
            ],
            [
                'uniqueIdentifier'=>'KIT.6',
                'name'=> 'Configuration Changes',
                'description'=>'Configuration Changes',
                'indicatorsId'=>1,
            ],
            [
                'uniqueIdentifier'=>'KIT.7',
                'name'=> 'Sensitive Data Tampering',
                'description'=>'Sensitive Data Tampering',
                'indicatorsId'=>1,
            ],
            [
                'uniqueIdentifier'=>'KIT.8',
                'name'=> 'User Account Changes',
                'description'=>'User Account Changes',
                'indicatorsId'=>2,
            ],
            [
                'uniqueIdentifier'=>'KIT.9',
                'name'=> 'User Access Activity',
                'description'=>'User Access Activity',
                'indicatorsId'=>2,
            ],
            [
                'uniqueIdentifier'=>'KIT.10',
                'name'=> 'Privilage Account Changes',
                'description'=>'Privilage Account Changes',
                'indicatorsId'=>2,
            ],
            [
                'uniqueIdentifier'=>'KIT.11',
                'name'=> 'Privilage Access Activity',
                'description'=>'Privilage Access Activity',
                'indicatorsId'=>2,
            ],
            [
                'uniqueIdentifier'=>'KIT.12',
                'name'=> 'Social Engeneering Attacks',
                'description'=>'Social Engeneering Attacks',
                'indicatorsId'=>2,
            ],
            [
                'uniqueIdentifier'=>'KIT.13',
                'name'=> 'Security Awareness',
                'description'=>'Security Awareness',
                'indicatorsId'=>2,
            ],
            [
                'uniqueIdentifier'=>'KIT.14',
                'name'=> 'Incident Detection',
                'description'=>'Incident Detection',
                'indicatorsId'=>3,
            ],
            [
                'uniqueIdentifier'=>'KIT.15',
                'name'=> 'Incident Resolution',
                'description'=>'Incident Resolution',
                'indicatorsId'=>3,
            ],
            [
                'uniqueIdentifier'=>'KIT.16',
                'name'=> 'Trasaction Data Changes',
                'description'=>'Trasaction Data Changes',
                'indicatorsId'=>3,
            ],
            [
                'uniqueIdentifier'=>'KIT.17',
                'name'=> 'Trasaction Threshold Anomaly',
                'description'=>'Trasaction Threshold Anomaly',
                'indicatorsId'=>3,
            ],
            [
                'uniqueIdentifier'=>'KIT.18',
                'name'=> 'Network Time Synchronisation',
                'description'=>'Network Time Synchronisation',
                'indicatorsId'=>3,
            ],
            [
                'uniqueIdentifier'=>'KIT.19',
                'name'=> 'System Perfomance',
                'description'=>'System Perfomance',
                'indicatorsId'=>4,
            ],
            [
                'uniqueIdentifier'=>'KIT.20',
                'name'=> 'System Availability',
                'description'=>'System Availability',
                'indicatorsId'=>4,
            ],
            [
                'uniqueIdentifier'=>'KIT.21',
                'name'=> 'System Data Backup',
                'description'=>'System Data Backup',
                'indicatorsId'=>4,
            ],
            [
                'uniqueIdentifier'=>'KIT.22',
                'name'=> 'System Data Backup Restoration',
                'description'=>'System Data Backup Restoration',
                'indicatorsId'=>4,
            ],
            [
                'uniqueIdentifier'=>'KIT.23',
                'name'=> 'Offline Data Backup ',
                'description'=>'Offline Data Backup ',
                'indicatorsId'=>4,
            ],
            [
                'uniqueIdentifier'=>'KIT.24',
                'name'=> 'Threat Intelligence. ',
                'description'=>'Threat Intelligence. ',
                'indicatorsId'=>4,
            ],
        ];

        
        foreach($threatIndicators as $key => $value){

            CVECThreatIndicator::create($value);            

        }
    }
}
