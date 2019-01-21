<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'days',
        'description',
        'user_id',
        'company_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
