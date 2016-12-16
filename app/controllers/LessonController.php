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
        $rules = array('title_lesson' => 'required|min:3|max:200'  );
		$validator = Validator::make(Input::all(), $rules);

			// dd($validator->fails());
		if($validator->fails()){
			return Redirect::route('lessons.create')
				->withErrors($validator);
		}

		$lesson = new Lesson;
		$lesson-> title_lesson = Input::get('title_lesson');
		$lesson-> price = Input::get('price');
		$lesson-> id_section = Input::get('id_section');
		$lesson->save();

		return Redirect::to('courses/'.Session::get('cid'));
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
			return Redirect::to('courses/'.Session::get('cid'));
	}


}
