<?php

class Section extends Eloquent {

    public function lessons()
    {
        return $this->hasMany('Lesson','id_section');
    }

    public function course()
    {
        return $this->belongsTo('Course','id_course');
    }

}
