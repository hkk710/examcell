<?php

namespace Examination;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function rooms() {
        return $this->belongsToMany('Examination\Room');
    }
}
