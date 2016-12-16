@extends('courses.index1')
@foreach ($errors->all() as $error)
    <div class="errors">
        {{ $error }}
    </div>
@endforeach

@section('content')

    {{ Form::model($section, array('action' => array('SectionController@update', $section->id), 'method' => 'PUT')) }}

    <div class="form-group">
        <!--TODO: Fix hidden title_section  -->
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>
        <!-- <input type="text" name="title" value="" placeholder="Title"> -->
        <!-- <input type="text" name="description" value="" placeholder="Description"> -->
        <input type="hidden" name="id_course" value="{{Session::get('cid')}}">
        <div class="form-group">
            {{ Form::submit('Update the Section!', array('class' => 'btn btn-primary')) }}
            <!-- <button type="submit" class="btn btn-primary">Create</button> -->
        </div>
        <!-- <button type="submit">Create</button> -->
    {{ Form::close() }}
@stop
