@extends('app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Courses</h3></div>

                    <!-- List group -->
                    <ul class="list-group">
                        @foreach($courses as $course)
                            <div class="list-group-items">
                                    <li class="list-group-item"><a href="{{ action('CoursesController@show', [$course->slug]) }}" data-toggle="tooltip" data-placement="left" title="Open Course" >{{ $course->title }} </a>  <span href="#" class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="Get access to this course"><a href="#"></a> </span>  <span class="label label-info label-as-badge">{{ $course->present()->lessonsCount }}</span></li>
                            </div>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
