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
                            <div class="form-group">
                                {!! Form::label('title', 'Lesson title:*') !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>
                            <!--- Excerpt Form Inout Field --->
                            <div class="form-group">
                                {!! Form::label('body', 'Small description:') !!}
                                {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
                            </div>
                            <!--- Body Form Inout Field --->
                            <div class="form-group">
                                {!! Form::label('body', 'Lesson:*') !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>
                            <!--- Published_at Form Input HIDDEN--->
                            <div class="form-group">
                                {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
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


