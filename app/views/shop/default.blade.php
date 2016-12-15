@extends('index')

@section('content')
<p><a href="{{ URL::route('new-course') }}" class="btn btn-success">add new</a></p>
@foreach ($courses as $course)
<div class="col-xs-12 col-md-3">
	<div class="thumbnail">
	<a href="/{{ $course->id }}"><img class="js-image" src="{{$course->img_src}}" alt="{{$course->title}}"/></a>
		<dir class="caption">
			<h3><a href="course/{{ $course->id }}">{{$course->title}}</a></h3>
			<p>
				{{$course->getSum()}}
			</p>
		</dir>
		<div>
			<p><a href="{{ URL::route('del-course',$course->id) }}" class="btn btn-danger">del</a></p>
		</div>
	</div>
</div>
@endforeach
@stop
