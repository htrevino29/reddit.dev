<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
    public function getCreatedAtAttribute($value)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
    public function getUpdatedAtAttribute($value)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }

    public function setCreatedAtAttribute($value)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->format('l js \\of F Y h:i:s A');
    }
    public function setUpdatedAtAttribute($value)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->format('l js \\of F Y h:i:s A');
    }



}
