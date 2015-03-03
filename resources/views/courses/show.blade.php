@extends('app')

@section('content')
    <div class="banner banner__series">
        <div class="container">
            <div class="col-md-8 zeroed">
                <h1 class="series-title wow flipInX animated" style="visibility: visible;">{{ $course->course_title }}</h1>
                <div class="body wow fadeInUp animated" style="visibility: visible;">
                    <p>{{$course->course_body}}</p>

                </div>
            </div>

            <div class="col-md-4 banner__series-learning-points">
                <h5>You Will Study About...</h5>
                <ul>
                    <li>{{ $course->course_excerpt }}</li>
                    <li>{{ $course->course_excerpt }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="lesson-outline-wrap">
                <div class="container wrap--video">
                    <table class="lesson-outline table table-bordered table-hover lesson-outline-striped">
                        <tbody>
                        @foreach($course->lessons as $lesson)
                        <tr class="lesson-wrap ">
                            <td class="lesson-index">{{ $lesson->lesson_order }}</td>

                            <td class="lesson-title">
                               {!! link_to_route('course.lesson.show', $lesson->lesson_title, [$lesson->course->course_slug, $lesson->lesson_slug], $attributes = array('class' => 'strike')) !!}


                            </td>

                            <td class="lesson-length">
                                {{ $lesson->lesson_excerpt }}
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
