<?php

class Course extends Eloquent {
  public function sections()
    {
      return $this->hasMany('Section','id_course');
    }

    public function getSum(){
      $tmp = //DB::table('courses')
              $this->join('sections', 'courses.id', '=', 'sections.id_course')
              ->join('lessons', 'sections.id', '=', 'lessons.id_section')
              ->where('courses.id','=',$this->id)
              ->sum('lessons.price');
              // dd($tmp);
              return $tmp;
    }
}
