@extends('courses.index1')

@foreach ($errors->all() as $error)
  <div class="errors">
    {{ $error }}
  </div>
@endforeach

@section('content')
{{ Form::model($course, array('action' => array('CourseController@update', $course->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        <!-- <input type="text" name="title" value="" placeholder="Title"> -->
    </div>

    <div class="form-group">
        {{ Form::label('img_src', 'Image') }}
        {{ Form::text('img_src', Input::old('img_src'), array('class' => 'form-control')) }}
        <!-- <input type="text" name="img_src" value="" placeholder="img src"> -->
    </div>

    <div class="form-group">
        {{ Form::submit('Update the Course!', array('class' => 'btn btn-primary')) }}
        <!-- <button type="submit" class="btn btn-primary">Create</button> -->
    </div>

{{ Form::close() }}

@stop
