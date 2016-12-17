@extends('courses.index1')

@section('content')

<div class="col-xs-12 col-md-4">
  <div class="thumbnail">
  <img class="js-image" src="{{$course->img_src}}" alt="{{$course->title}}"/>
    <dir class="caption">
      <h3>{{$course->title}}</h3>
      <p>
        {{$course->getSum()}} грн
      </p>
    </dir>
  </div>
</div>
<!-- End  Course View -->
<div class="col-xs-12 col-md-8">
  <p>
    <a href="{{ URL::route('sections.create') }}" class="btn btn-success">add section</a></p>
<!--  -->

@foreach($sections as $section)
<div class="panel panel-default">
  <div class="panel-heading">{{$section->title_section}}&nbsp<span class="badge"> {{ $section_sum[ $section->id ]}} </span>
      <a class="btn btn-xs btn-info pull-right" href="{{ URL::to('sections/' . $section->id . '/edit') }}">Edit</a>
      {{ Form::open(array('url' => 'sections/' . $section->id, 'class' => 'pull-right')) }}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-warning')) }}
      {{ Form::close() }}
  </div>
  <div class="panel-body">
    <ul class="list-group">
        @foreach ($lessons[$section->id] as $lesson)

            <ul class="list-group">
                <li class="list-group-item">
                    {{$lesson->title_lesson}}
                    <span class="badge ">{{$lesson->price}} грн</span>
                    {{ Form::open(array('url' => 'lessons/' . $lesson->id . '/edit', 'method' => 'get', 'class' => 'pull-right')) }}

                        {{ Form::hidden('id_section', $section->id,array('class' => 'btn btn-xs btn-warning')) }}
                        {{ Form::submit('Edit', array('class' => 'btn btn-xs btn-info pull-right')) }}
                    {{ Form::close() }}

                    {{ Form::open(array('url' => 'lessons/' . $lesson->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Del', array('class' => 'btn btn-xs btn-warning')) }}
                    {{ Form::close() }}
                </li>
            </ul>

        @endforeach
    </ul>
    {{ Form::open(array('url' => 'lessons/create', 'method' => 'get', 'class' => 'pull-right')) }}

        {{ Form::hidden('id_section', $section->id,array('class' => 'btn btn-xs btn-warning')) }}
        {{ Form::submit('Add', array('class' => 'btn btn-xs btn-success')) }}
    {{ Form::close() }}

  </div>
</div>
@endforeach



</div>

@stop
