@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Create new Lesson</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::open(['url' => 'tests']) !!}
                        <!--- Course Form Input --->
                        <div class="form-group">
                            {!! Form::label('Lesson', 'Lesson:*') !!}
                            <select class="form-control" name="lesson_id">
                                @foreach($lessons as $lesson)
                                    <option value="{{ $lesson->id }}">{{ $lesson->course->course_title }} &raquo; {{ $lesson->lesson_order }} {{ $lesson->lesson_title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--- Lesson Title Form Inout Field --->
                        <div class="form-group">
                            {!! Form::label('test_title', 'Test title:*') !!}
                            {!! Form::text('test_title', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Body Form Inout Field --->
                        <div class="form-group">
                            {!! Form::label('test_body', 'Lesson:*') !!}
                            {!! Form::textarea('test_body', null, ['class' => 'form-control', 'id' => 'test-body-field']) !!}
                        </div>
                        <!--- Published_at Form Input HIDDEN--->
                        <div class="form-group">
                            {!! Form::input('date', 'test_published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
                        </div>
                        <!--- Submit Course Field --->
                        <div class="form-group">
                            {!! Form::submit('Add new test to this lesson', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


