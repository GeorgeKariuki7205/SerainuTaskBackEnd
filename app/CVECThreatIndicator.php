<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CVECThreatIndicator extends Model
{
    //
    protected $guarded = ['id']; 
        
    protected $table = 'cvec_threat_indicators';
}
