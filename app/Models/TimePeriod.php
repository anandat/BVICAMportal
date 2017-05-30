<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimePeriod extends Model
{
	protected $table = 'time_periods';

    protected $fillable = ['from', 'to'];
}