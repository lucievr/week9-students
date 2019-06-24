<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function students()
    {
        return $this->belongsToMany('App\Student', 'student_id', 'image_id', 'student_image');
    }
}
