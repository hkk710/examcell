<?php

namespace Examination;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function students() {
        return $this->belongsToMany('Examination\Student');
    }
}
