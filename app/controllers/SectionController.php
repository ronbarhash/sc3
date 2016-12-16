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
        $section = Section::find($id);
        return View::make('sections.edit')
            ->with('section', $section);
    }

	public function destroy($id)
    {
		$section = Section::find($id);
		$cid =$section->id_course;

        $section->delete();
			return Redirect::to('courses/'.$cid);
	}

	public function update($id)
	{
		// TODO: Fix hidden title_section
		$rules = array('title' => 'required|min:3|max:200'  );
		$validator = Validator::make(Input::all(), $rules);

			// dd($validator->fails());
		if($validator->fails()){
			return Redirect::route('sections.create')
				->withErrors($validator);
		}

		$section = Section::find($id);
		$section-> title_section = Input::get('title');
		$section-> description = Input::get('description');
		$section-> id_course = Input::get('id_course');
		$section->save();

		return Redirect::to('courses/'.$section-> id_course);
    }
}
