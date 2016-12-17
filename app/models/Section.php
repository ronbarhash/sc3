<?php

class Section extends Eloquent {
    private $_cost = 0;

    public function lessons()
    {
        return $this->hasMany('Lesson','id_section');
    }

    public function course()
    {
        return $this->belongsTo('Course','id_course');
    }
    public function section_price()
    {
        $_cost = $this->lections()->summ();
        return $this->_cost;
    }

}
