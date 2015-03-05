@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Edit: {!! $test->test_title !!}</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::model($test, ['method' => 'PATCH', 'action' => ['TestsController@update', $test->id]]) !!}
                        <!--- Course Form Input --->
                        <div class="form-group">
                            {!! Form::label('test', 'Lesson:') !!}
                            {!! Form::select('lesson_id', $lessons, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('test_title', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Slug Form Input--->
                        <div class="form-group">
                            {!! Form::label('test_slug', 'URL:') !!}
                            {!! Form::text('test_slug', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Body Form Inout Field --->
                        <div class="form-group">
                            {!! Form::label('test_body', 'Description:') !!}
                            {!! Form::textarea('test_body', null, ['class' => 'form-control', 'id' => 'test-body-field']) !!}
                        </div>
                        <!--- Published_at Form Input HIDDEN--->
                        <div class="form-group">
                            {!! Form::input('date', 'test_published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
                        </div>
                        <!--- Submit Course Field --->
                        <div class="form-group">
                            {!! Form::submit('Update test', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


