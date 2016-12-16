<?php
/*
class HomeController extends BaseController {

	public function index()
	{
		$courses = Course::get();
		// dd($courses);
		return View::make('shop.default')->with(['courses'=>$courses]);
	}

	public function addCourse(){
		return View::make('shop.addcourse');
	}


	public function delCourse(Course $id){
		$id->delete();
		// dd($id);
		// return View::make('shop.delcourse');
		return Redirect::route('index');
	}

	public function postAddCourse(){
		$rules = array('title' => 'required|min:3|max:200' );
		$validator = Validator::make(Input::all(), $rules);

		// dd($validator->fails());
		if($validator->fails()){
			return Redirect::route('new-course')->withErrors($validator);
		}

		$course = new Course();
		// dd(Input::all());
		$course-> title = Input::get('title');
		$course-> img_src = Input::get('img_src');
		$course->save();

		return Redirect::route('index');
	}

/// ==================================================================
public function postAddLection(){
		$rules = array('title' => 'required|min:3|max:200','price' => 'required|min:1|max:20',  );
		$validator = Validator::make(Input::all(), $rules);

		// dd($validator->fails());
		if($validator->fails()){
			return Redirect::route('add-lesson')->withErrors($validator);
		}

		$lesson = new Lesson();
		// dd(Input::all());
		$lesson-> title_lesson = Input::get('title');
		$lesson-> price = Input::get('description');
		$lesson-> id_section = Input::get('id_section');
		$lesson->save();

		return Redirect::to('/'+Input::get('id_section'));
	}

	public function addLesson(){
		// $course = Course::get();
		// dd($course->id);
		return View::make('shop.addlesson');
	}

}
*/
