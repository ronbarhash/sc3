@extends('courses.index1')
@foreach ($errors->all() as $error)
    <div class="errors">
        {{ $error }}
    </div>
@endforeach

@section('content')

    {{ Form::open(array('url' => 'sections')) }}
    <div class="form-group">
        {{ Form::label('title_section', 'Title') }}
        {{ Form::text('title_section', Input::old('title_section'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>
        <input type="hidden" name="id_course" value="{{Session::get('cid')}}">
        <div class="form-group">
            {{ Form::submit('Create the Section!', array('class' => 'btn btn-primary')) }}
        </div>
    {{ Form::close() }}
@stop
