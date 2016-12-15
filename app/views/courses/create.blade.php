@extends('index')

@foreach ($errors->all() as $error)
  <div class="errors">
    {{ $error }}
  </div>
@endforeach

@section('content')
{{ Form::open(array('url' => 'nerds')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::email('title', Input::old('title'), array('class' => 'form-control')) }}
        <!-- <input type="text" name="title" value="" placeholder="Title"> -->
    </div>

    <div class="form-group">
        {{ Form::label('img_src', 'Image') }}
        {{ Form::email('img_src', Input::old('img_src'), array('class' => 'form-control')) }}
        <!-- <input type="text" name="img_src" value="" placeholder="img src"> -->
    </div>

    <div class="form-group">
        {{ Form::submit('Create the Course!', array('class' => 'btn btn-primary')) }}
        <!-- <button type="submit" class="btn btn-primary">Create</button> -->
    </div>

{{ Form::close() }}

@stop
