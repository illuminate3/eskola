@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lessons</div>

                    <div class="panel-body">
                        @foreach($lessons as $lesson)
                            <article>
                                <h2>
                                    <a href="{{ action('LessonsController@show', [$lesson->slug]) }}"> {{ $lesson->title }}</a>
                                </h2>
                                <div class="body">{!! $lesson->body !!}</div>
                                <div class="body">{{ $lesson->course_id }}</div>
                                <div class="body">{{ $lesson->excerpt }}</div>
                                <div class="body">{{ $lesson->slug }}</div>
                                <div class="body">{{ $lesson->id }}</div>

                            </article>
                            </hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
