@extends('courses.index1')

@foreach ($errors->all() as $error)
  <div class="errors">
    {{ $error }}
  </div>
@endforeach

@section('content')

{{ Form::model($lesson, array('action' => array('LessonController@update', $lesson->id), 'method' => 'PUT')) }}
<div class="form-group">
    {{ Form::label('title_lesson', 'Title') }}
    {{ Form::text('title_lesson', Input::old('title_lesson'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('price', 'Price') }}
    {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
</div>
    <!-- <input type="text" name="title" value="" placeholder="Title"> -->
    <!-- <input type="text" name="description" value="" placeholder="Description"> -->
    <input type="hidden" name="id_section" value="{{$_GET['id_section']}}">
    <div class="form-group">
        {{ Form::submit('Update the Lesson!', array('class' => 'btn btn-primary')) }}
        <!-- <button type="submit" class="btn btn-primary">Create</button> -->
    </div>
{{ Form::close() }}

@stop
