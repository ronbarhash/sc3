<?php

class SectionController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$sections = Section::get();
		 return View::make(shop.getCourse);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	 public function addSection(){
		// dd();
 	// 	$course = Course::where($id_course)->first();
 	// 	dd($course);
 	// 	return View::make('shop.addsection');
 	}

	public function create()
	{
		// $course =
		return View::make('shop.addsection');
	}

	// ==================================================================

		public function postAddSection(){
			$rules = array('title' => 'required|min:3|max:200','description' => 'required|min:3|max:200',  );
			$validator = Validator::make(Input::all(), $rules);

			// dd($validator->fails());
			if($validator->fails()){
				return Redirect::route('add-section')->withErrors($validator);
			}

			$section = new Section();
			// dd(Input::all());
			$section-> title_section = Input::get('title');
			$section-> description = Input::get('description');
			$section-> id_course = Input::get('id_course');
			$section->save();

			return Redirect::to('/5');
		}

		public function delSection(Section $section){
			$section->delete();
			//  dd($section);
			// return View::make('shop.delcourse');
			return Redirect::to('/'+$section->id_course);
		}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
