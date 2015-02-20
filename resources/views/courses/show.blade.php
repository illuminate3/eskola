@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{ $course->title }}</h1>
                    </div>

                    <div class="panel-body">
                        <article>
                            <div class="body">{{ $course->body }}
                                @foreach($course->lessons as $lesson)
                                    <article>
                                        <h3>
                                            <a href="{{ action('LessonsController@show', [$lesson->slug]) }}"> {{ $lesson->title }}</a>
                                        </h3>
                                        <li class="body">{{ $lesson->body }}</li>
                                    </article>
                                    </hr>
                                @endforeach
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
