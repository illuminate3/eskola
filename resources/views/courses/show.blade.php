@extends('app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="banner banner__courses">
                <div class="container">
                    <div class="col-md-8 zeroed">
                        <h1 class="courses-title wow flipInX animated" style="visibility: visible;">{{ $course->title }}</h1>
                        <div class="body wow fadeInUp animated" style="visibility: visible;">
                            <p></p><p>{{ $course->body }}</p><p></p>
                        </div>
                    </div>

                    <div class="col-md-4 banner__courses-learning-points">
                        <h5>You Will Study About...</h5>
                        <ul>
                            <li>{{ $course->excerpt }}</li>
                            <li>{{ $course->excerpt }} </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="lesson-outline-wrap">
                <div class="container wrap--video">
                    <table class="lesson-outline table table-bordered table-hover lesson-outline-striped">
                        <tbody>
                        @foreach($course->lessons as $lesson)
                        <tr class="lesson-wrap ">
                            <td class="lesson-index">{{ $lesson->id }}</td>

                            <td class="lesson-title">
                                <a href="{{ action('LessonsController@show', [$lesson->slug]) }}" class="strike">
                                    {{ $lesson->title }}
                                </a>
                            </td>

                            <td class="lesson-length">
                                {{ $lesson->excerpt }}
                            </td>
                            <td class="lesson-status">
                                <span href="#" class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="Get access to this course">
                            </td>
                            <td class="lesson-watch-later">
                                <div class="lesson-watch-later lesson-meta-item">
                                    <span href="#" class="fa fa-square-o" title="Get access to this course" data-toggle="tooltip" data-placement="top" >
                                </div>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
