<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    //
    protected $guarded = ['id']; 
        
    protected $table = 'indicators';

    public function indicatorHasManyCVECThreatIndicators()
    {
        return $this->hasMany('App\CVECThreatIndicator', 'indicatorsId', 'id');
    }
    public function indicstorHasManyRemediationActivities()
    {
        return $this->hasMany('App\IndicatorRemediationActivities', 'indicatorsId', 'id');
    }

    public function indicatorBelongsToOrganisation()
    {
        return $this->belongsTo('App\Organisation', 'organisation_id', 'id');
    }
    
}
