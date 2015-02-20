@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{ $lesson->title }}</h1>
                    </div>

                    <div class="panel-body">
                        <article>
                            <div class="body">{{ $lesson->body }}</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
