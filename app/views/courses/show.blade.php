@extends('courses.index1')

@section('content')

<div class="col-xs-12 col-md-4">
  <div class="thumbnail">
  <img class="js-image" src="{{$course->img_src}}" alt="{{$course->title}}"/>
    <dir class="caption">
      <h3>{{$course->title}}</h3>
      <p>
        TOTAL_COST грн
      </p>
    </dir>
  </div>
</div>
<!-- End  Course View -->
<div class="col-xs-12 col-md-4">
  <p>
    <a href="{{ URL::route('sections.create') }}" class="btn btn-success">add section</a></p>
<!--  -->

@foreach($sections as $section)
<div class="panel panel-default">
  <div class="panel-heading">{{$section->title_section}}&nbsp<span class="badge">{{ $costs }}</span>
      {{ Form::open(array('url' => 'sections/' . $section->id, 'class' => 'pull-right')) }}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Delete1', array('class' => 'btn btn-xs btn-warning')) }}
      {{ Form::close() }}
      <a class="btn btn-xs btn-info pull-right" href="{{ URL::to('sections/' . $section->id . '/edit') }}">Edit</a>
  </div>
  <div class="panel-body">
    <ul class="list-group">
        <li> sdsads </li>
    </ul>
    <a href="{{ URL::route('lessons.create') }}" class="btn btn-sm btn-success">add lesson</a><br>
  </div>
</div>
@endforeach



</div>

@stop
