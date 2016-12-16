<?php
class CourseController extends \BaseController {
    public function index()
	{
        $courses = Course::all();

		return View::make('courses.index')
            ->with('courses',$courses);
	}

    public function getCourse($id)
    {
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

	public function create()
	{
		return View::make('courses.create');
	}

	public function store()
	{
        $rules = array(
			'title'       => 'required',

		);

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
			return Redirect::to('courses/create')
				->withErrors($validator);
				//->withInput(Input::except('img_src'));
		} else {
			// store
			$course = new Course;
			$course->title       = Input::get('title');
			$course->img_src      = Input::get('img_src');
			$course->save();

            // redirect
            Session::flash('message', 'Successfully created course!');
            return Redirect::to('courses');
        }
	}

	public function show($id)
	{
		$course = Course::find($id);
        $sections = $course->sections;
        $costs = Course::find($id)->getSum();

        Session::put('cid', $id);

        // dd($costs);
        return View::make('courses.show')
            ->with('course',$course)
            ->with('sections',$sections)
            ->with('costs',$costs);
	}

	public function edit($id)
	{
		$course = Course::find($id);

        return View::make('courses.edit')
            ->with('course',$course);
	}

	public function update($id)
	{
        $rules = array(
			'title'       => 'required'
			//'img_src'      => 'required'
		);
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('courses/' . $id . '/edit')
                ->withErrors($validator);
                // ->withInput(Input::except('img_src'));
        } else {
            $course = Course::find($id);
            $course->title = Input::get('title');
            $course->img_src = Input::get('img_src');
            $course->save();

            Session::flash('message','Successfully updates Course!');
            return Redirect::to('courses');
        }
	}

	public function destroy($id)
	{
        $course = Course::find($id);
        $course->delete();

        Session::flash('message', 'Successfully deleted the course!');
        return Redirect::route('courses.index')
            ->with('total_cost',1);
	}

}
