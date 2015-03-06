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

                        {!! Form::open(['url' => 'lessons']) !!}
                        <!--- Course Form Input --->
                        <div class="form-group">
                            {!! Form::label('Course', 'Course:*') !!}
                            {!! Form::select('course_id', $courses, null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Lesson Order Form Inout Field --->
                                {!! Form::hidden('lesson_order', null, ['class' => 'form-control']) !!}
                          <!--- Lesson Title Form Inout Field --->
                            <div class="form-group">
                                {!! Form::label('lesson_title', 'Lesson title:*') !!}
                                {!! Form::text('lesson_title', null, ['class' => 'form-control']) !!}
                            </div>

                            <!--- Excerpt Form Inout Field --->
                            <div class="form-group">
                                {!! Form::label('lesson_excerpt', 'Small description:') !!}
                                {!! Form::text('lesson_excerpt', null, ['class' => 'form-control']) !!}
                            </div>
                            <!--- Body Form Inout Field --->
                            <div class="form-group">
                                {!! Form::label('lesson_body', 'Lesson:*') !!}
                                {!! Form::textarea('lesson_body', null, ['class' => 'form-control', 'id' => 'test-body-field']) !!}
                            </div>
                            <!--- Published_at Form Input HIDDEN--->
                            <div class="form-group">
                                {!! Form::input('date', 'lesson_published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
                            </div>
                            <!--- Submit Course Field --->
                            <div class="form-group">
                                {!! Form::submit('Add new lesson to this course', ['class' => 'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


