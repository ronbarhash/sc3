@extends('index')

@foreach ($errors->all() as $error)
  <div class="errors">
    {{ $error }}
  </div>
@endforeach

@section('content')

  {{ Form::open() }}
    <input type="text" name="title" value="" placeholder="Title">
    <input type="text" name="price" value="" placeholder="Description">
    <input type="text" name="id_section" value="18" placeholder="id">
    <!-- <input type="hidden" name="id_course" value="1" placeholder="Description"> -->
    <button type="submit">Create</button>
  {{ Form::close() }}

@stop
