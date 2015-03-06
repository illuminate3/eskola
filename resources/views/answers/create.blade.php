@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Submit answers</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::open(['url' => 'answers']) !!}
                            <div class="form-group">
                                {!! Form::label('answer_title', 'Title:*') !!}
                                {!! Form::text('answer_title', null, ['class' => 'form-control']) !!}
                            </div>
                        {!! Form::hidden('user_id', null, ['class' => 'form-control']) !!}
                        {!! Form::hidden('course_id', null, ['class' => 'form-control']) !!}
                        {!! Form::hidden('lesson_id', $lesson_id, ['class' => 'form-control']) !!}
                        {!! Form::hidden('test_id', $test_id, ['class' => 'form-control']) !!}
                            <!--- Body Form Inout Field --->
                           <div class="form-group">
                                {!! Form::label('answer_body', 'Description:') !!}
                                {!! Form::textarea('answer_body', $lesson->test->test_body, ['class' => 'form-control', 'id' => 'test-body-field']) !!}
                            </div>
                            <!--- Published_at Form Input HIDDEN--->
                            {{--<div class="form-group">--}}
                                {{--{!! Form::input('date', 'answer_published_at', date('Y-m-d'), ['class' => 'form-control']) !!}--}}
                            {{--</div>--}}
                            <!--- Submit Course Field --->
                            <div class="form-group">
                                {!! Form::submit('Submit test answers!', ['class' => 'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


