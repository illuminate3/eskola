@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lessons</div>

                    <div class="panel-body">
                        @foreach($tests as $test)
                            <article>
                                <h2>
                                    <a href="{{ action('LessonsController@show', [$test->slug]) }}"> {{ $test->title }}</a>
                                </h2>
                                <div class="body">{!! $test->body !!}</div>
                                <div class="body">{{ $test->course_id }}</div>
                                <div class="body">{{ $test->excerpt }}</div>
                                <div class="body">{{ $test->slug }}</div>
                                <div class="body">{{ $test->id }}</div>

                            </article>
                            </hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
