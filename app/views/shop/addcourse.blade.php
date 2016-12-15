@extends('index')

@foreach ($errors->all() as $error)
  <div class="errors">
    {{ $error }}
  </div>
@endforeach

@section('content')
  {{ Form::open() }}
    <input type="text" name="title" value="" placeholder="Title">
    <input type="text" name="img_src" value="" placeholder="img src">
    <button type="submit">Create</button>
  {{ Form::close() }}

@stop
