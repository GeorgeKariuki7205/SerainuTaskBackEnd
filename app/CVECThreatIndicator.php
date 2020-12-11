<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CVECThreatIndicator extends Model
{
    //
    protected $guarded = ['id']; 
        
    protected $table = 'cvec_threat_indicators';

    public function CVECThreatIndicatorHasManyCVECThreatIndicatorDetected()
    {
        return $this->hasMany('App\CVECThreatIndicatorDetected', 'cvectThreatIndicatorID', 'id');
    }

    public function CVECThreatIndicatorHasManyCVECThreatIndicatorValidated()
    {
        return $this->hasMany('App\CVECThreatIndicatorValidated', 'cvectThreatIndicatorID', 'id');
    }
}
