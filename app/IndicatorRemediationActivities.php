<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndicatorRemediationActivities extends Model
{
    //
    protected $guarded = ['id']; 
        
    protected $table = 'indicator_remediation_activities';

    public function IndicatorRemediationActivitiesIndicator()
    {
        return $this->belongsTo('App\Indicator', 'indicatorsId', 'id');
    }
}
