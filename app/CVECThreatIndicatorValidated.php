<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CVECThreatIndicatorValidated extends Model
{
    //
    protected $guarded = ['id']; 
        
    protected $table = 'cvec_threat_indicator_validated';

    public function CVECThreatIndicatorValidatedBelongsToCVECThreatIndicator()
    {
        return $this->belongsTo('App\CVECThreatIndicator', 'cvectThreatIndicatorID', 'id');
    }
}
