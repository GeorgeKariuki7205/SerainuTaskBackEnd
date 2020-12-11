<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CVECThreatIndicatorDetected extends Model
{
    //
    protected $guarded = ['id']; 
        
    protected $table = 'cvec_threat_indicator_detected';

    public function CVECThreatIndicatorDetectedBelongsToCVECThreatIndicator()
    {
        return $this->belongsTo('App\CVECThreatIndicator', 'cvectThreatIndicatorID', 'id');
    }
}
