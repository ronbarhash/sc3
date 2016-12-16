<?php

class LessonController extends \BaseController {

	public function index()
	{
        $lessons = Lesson::all();

        return View::make('courses/'.$id)
            ->with('lessons', $lessons);
	}

	public function create()
	{
		return View::make('lessons.create');
	}

	public function store()
	{
        $rules = array('title' => 'required|min:3|max:200'  );
		$validator = Validator::make(Input::all(), $rules);

			// dd($validator->fails());
		if($validator->fails()){
			return Redirect::route('sections.create')
				->withErrors($validator);
		}

		$section = new Section;
		$section-> title_section = Input::get('title');
		$section-> description = Input::get('description');
		$section-> id_course = Input::get('id_course');
		$section->save();

		return Redirect::to('courses/'.$section-> id_course);
	}

	public function edit($id)
	{
        $lesson = Lesson::find($id);
        return View::make('lessons.edit')
            ->with('lesson', $lesson);
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
        $lesson = Lesson::find($id);
		//$cid =$section->id_course;

        $lesson->delete();
			return Redirect::to('courses/'.$cid);
	}


}
