<?php

class Lesson extends Eloquent {

    public function lessons2section($id)
    {
        return $this::where('id_section',$id)->sum('price');
    }

    public function lessons()
    {
        return $this->belongsTo('Session','id');
    }

}
