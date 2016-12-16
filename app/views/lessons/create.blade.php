@extends('courses.index1')

@foreach ($errors->all() as $error)
  <div class="errors">
    {{ $error }}
  </div>
@endforeach

@section('content')

{{ Form::open(array('url' => 'lessons')) }}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('price', 'Price') }}
    {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
</div>
    <!-- <input type="text" name="title" value="" placeholder="Title"> -->
    <!-- <input type="text" name="description" value="" placeholder="Description"> -->
    <input type="hidden" name="id_section" value="{{Session::get('sid')}}">
    <div class="form-group">
        {{ Form::submit('Create the Lesson!', array('class' => 'btn btn-primary')) }}
        <!-- <button type="submit" class="btn btn-primary">Create</button> -->
    </div>
{{ Form::close() }}

@stop
