<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $guarded = ['id']; 

    public function organisationHasManyIndicator()
    {
        return $this->hasMany('App\Indicator', 'organisation_id', 'id');
    }
}
