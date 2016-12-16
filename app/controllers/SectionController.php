<?php

class SectionController extends \BaseController {

	public function index()
	{
        $id = Input::get('id');
		$sections = Section::all();
        //dd($id);
        return View::make('courses/'.$id)
            ->with('sections', $sections);
	}

	 public function addSection()
     {
		// dd();
        // 	$course = Course::where($id_course)->first();
        // 	dd($course);
        // 	return View::make('shop.addsection');
    }

	public function create()
	{
        // dd($id);
		return View::make('sections.create');
	}

	public function store()
    {
		$rules = array('title' => 'required|min:3|max:200','description' => 'required|min:3|max:200',  );
		$validator = Validator::make(Input::all(), $rules);

			// dd($validator->fails());
		if($validator->fails()){
			return Redirect::route('sections.create')->withErrors($validator);
		}

		$section = new Section;
		$section-> title_section = Input::get('title');
		$section-> description = Input::get('description');
		$section-> id_course = Input::get('id_course');
		$section->save();

		return Redirect::to('sections');
	}

    public function edit($id)
    {
        $section = Section::find($id);
        return View::make('sections.edit')
            ->with('section', $session);
    }

	public function destroy($id)
    {
		$section = Section::find($id);
        $section->delete();
			return Redirect::route('courses/'.$id);
	}

	public function show($id)
	{
		//
    }
}
