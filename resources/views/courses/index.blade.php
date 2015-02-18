@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Courses</div>

                    <div class="panel-body">
                        @foreach($courses as $course)
                            <article>
                                <h2>
                                    <a href="{{ action('CoursesController@show', [$course->slug]) }}"> {{ $course->title }}</a>
                                </h2>
                                <div class="body">{{ $course->body }}</div>
                            </article>
                            </hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
