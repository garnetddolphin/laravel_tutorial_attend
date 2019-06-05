<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
    	'name',
    	'email',
    	'body',
    	'flagged_at',
    	'updated_at'
    ];
}
