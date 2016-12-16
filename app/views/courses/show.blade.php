@extends('courses.index1')

@section('content')

<div class="col-xs-12 col-md-4">
  <div class="thumbnail">
  <img class="js-image" src="{{$course->img_src}}" alt="{{$course->title}}"/>
    <dir class="caption">
      <h3>{{$course->title}}</h3>
      <p>
        {{$total_cost}} грн
      </p>
    </dir>
  </div>
</div>
<!-- End  Course View -->

<div class="col-xs-12 col-md-4">
  <p>
    <a href="{{ URL::route('add-section') }}" class="btn btn-success">add section</a></p>
<!--  -->
@foreach($sections as $section)
<div class="panel panel-default">
  <div class="panel-heading">{{$section->title_section}}&nbsp<span class="badge">{{ $count[$section->id]}}</span><a href="{{ URL::route('del-section',$section->id) }}" class="btn btn-danger btn-xs pull-right">del</a></div>
  <div class="panel-body">
    <ul class="list-group">
        <li> sdsads </li>
    </ul>
    <a href="{{ URL::route('add-lesson') }}" class="btn btn-sm btn-success">add lesson</a><br>
  </div>
</div>
@endforeach




</div>





@stop
