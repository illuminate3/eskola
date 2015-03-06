@extends('app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2 class="jumbotron__heading info">Users Answers for tests</h2>

            <h4 class="jumbotron__sub-heading">All user TEST ANSWERS</h4>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">My test answers</div>
                    <div class="panel-body">
                        @foreach($answers as $answer)
                            <article>
                                <h2>
                                    <a href="{{ action('AnswersController@show', [$answer->id]) }}"> {{ $answer->answer_title }}</a>  <div class="body">{{ $answer->user->name }}</div>
                                </h2>
                                <div class="body"><strong>answer_title</strong> {{ $answer->answer_title }}</div>
                                <div class="body"><strong>answer_body</strong> {!! $answer->answer_body !!}</div>
                                <div class="body"><strong>user_id</strong> {{ $answer->user_id }}</div>
                                <div class="body"><strong>test_id</strong> {{ $answer->test_id }}</div>
                                <div class="body"><strong>lesson_id</strong>  {{ $answer->lesson_id }}</div>
                                <div class="body"><strong>course_id</strong> {{ $answer->course_id }}</div>

                            </article>
                            </hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
