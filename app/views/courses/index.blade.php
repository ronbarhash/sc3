@extends('courses.index1')

@section('content')
<p><a href="{{ URL::route('courses.create') }}" class="btn btn-success">add new</a></p>

@foreach ($courses as $course)

	<div class="col-xs-12 col-md-3">
		<div class="thumbnail">
		<a href="courses/{{ $course->id }}"><img class="js-image" src="{{$course->img_src}}" alt="{{$course->title}}"/></a>
			<dir class="caption">
				<h3><a href="courses/{{ $course->id }}">{{$course->title}}</a></h3>
				<p>
					{{$course->getSum()}}
				</p>
			</dir>
			<div>
				<p>
					<div class="btn-group">
						<a class="btn btn-small btn-info" href="{{ URL::to('courses/' . $course->id . '/edit') }}">Edit</a>
					{{ Form::open(array('url' => 'courses/' . $course->id, 'class' => 'pull-right')) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete', array('class' => 'btn btn-small btn-warning')) }}
					{{ Form::close() }}
					</div>

					<!-- <a href="{{ URL::route('courses.destroy',$course->id) }}" class="btn btn-danger">del</a></p> -->
			</div>
		</div>
	</div>
@endforeach
@stop
