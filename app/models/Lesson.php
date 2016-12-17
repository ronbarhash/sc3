<?php

class Lesson extends Eloquent {

    public function lessons2section($id)
    {
        return $this::where('id_section',$id)->sum('price');
    }

    public function section()
    {
        return $this->belongsTo('Session','id');
    }
    

}
