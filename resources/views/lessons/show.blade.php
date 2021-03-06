@extends('app')

@section('content')

    <div class="banner-lessons banner__series">
        <div class="container">
            <div class="col-md-8 zeroed">
                <h1 class="series-title wow flipInX animated" style="visibility: visible;">{{ $lesson->course->course_title }}</h1>
                <div class="body wow fadeInUp animated" style="visibility: visible;">
                    <p>{{$lesson->course->course_body}}</p>

                </div>
            </div>
        </div>
    </div>

        <div class="container">
        <div class="row">
            <h1 class="lesson-prerequisites-title" style="visibility: visible;">{{ $lesson->lesson_title }}</h1>
            <span class="lesson-prerequisites-title-divider"></span>
            <div class="col-md-7 col-md-offset-1">
                <article class="lesson-body">
                    <div class="body">{!! $lesson->lesson_body !!}</div>
                </article>
            </div>
        </div>
    </div>
@endsection
