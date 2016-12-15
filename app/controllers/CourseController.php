<?php
class CourseController extends BaseController {
  public function getCourse($id) {
    $course = Course::where('id',$id->id)->first();
    $sections = Course::find($id->id)->sections;
    $section_sum = [];
    $lessons = [];
    $tmp = DB::table('courses')
            ->join('sections', 'courses.id', '=', 'sections.id_course')
            ->join('lessons', 'sections.id', '=', 'lessons.id_section')
            ->where('courses.id','=',$id->id)
            ->sum('lessons.price');
    $section_sum = 4;
    foreach ($sections as $value) {

      // $l = Lesson::where('id_section',$value->id)->sum('price');
      // $lessons[$value->id] = Section::find($value->id)->lessons;
      //if($l>0)
        // $section_sum[$value->id] = [];
    }

  //  $arr = ['course'=>$course, 'sections'=>$sections, 'lessons'=>$lessons, 'count'=>$section_sum, 'total_cost'=>$course->getSum() ];
   $arr = ['course'=>$course,'total_cost'=>$course->getSum(),'sections'=>$sections,'count'=>$section_sum, ];
    return View::make('shop.getCourse',$arr);
  }
}
