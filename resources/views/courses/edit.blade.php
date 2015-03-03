@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Edit: {!! $course->title !!}</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::model($course, ['method' => 'PATCH', 'action' => ['CoursesController@update', $course->course_id]]) !!}
                        <div class="form-group">
                            {!! Form::label('course_title', 'Title:') !!}
                            {!! Form::text('course_title', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Slug Form Input--->
                        <div class="form-group">
                            {!! Form::label('course_slug', 'URL:') !!}
                            {!! Form::text('course_slug', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Body Form Inout Field --->
                        <div class="form-group">
                            {!! Form::label('course_body', 'Description:') !!}
                            {!! Form::textarea('course_body', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Published_at Form Input HIDDEN--->
                        <div class="form-group">
                            {!! Form::input('date', 'course_published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
                        </div>
                        <!--- Submit Course Field --->
                        <div class="form-group">
                            {!! Form::submit('Edit course information', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


