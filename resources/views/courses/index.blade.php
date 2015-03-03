@extends('app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2 class="jumbotron__heading info">Courses</h2>

            <h4 class="jumbotron__sub-heading">Think of a series as a step-by-step, deep-dive into some aspect of discipleship.</h4>

        </div>
    </div>
    <div class="container">
    @foreach($courses->chunk(3) as $items)
        <div class="row course-set courses__row">
            @foreach($items as $course)
                <article class="col-md-4 course-block course-block-series course-{{ $course->id }}">

                    <div class="full-center course-block-inner"
                         style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(http://lorempixel.com/360/225/people/{{ $course->id }}/); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(http://lorempixel.com/360/225/people/{{ $course->id }}/); background-size: cover;">

                        <div class="course-block-thumbnail">
                            <i class="course-thumbnail fa fa-lock"></i>
                        </div>

                        <h5 class="course-block-difficulty">
                            beginner
                        </h5>

                        <h3 class="course-block-title  not-watched">

                            <a href="{{ action('CoursesController@show', [$course->course_slug]) }}" title="{{ $course->course_title }}">{{ $course->course_title }}</a>
                        </h3>

                        <small class="course-block-length">
                            <span class="label label-info label-as-badge">{{ $course->present()->courseLessonsCount }}</span>
                        </small>
                    </div>

                    <div class="course-block-meta">
                        <div class="course-date">
                            {{ $course->present()->createdAt }}
                        </div>


                        <div class="course-watch-later course-meta-item">
                            <form method="POST" action="https://laracasts.com/courses/11/save" accept-charset="UTF-8"
                                  id="watch-later-11"><input name="_token" type="hidden"
                                                             value="DZre7aGUOk9jKWPcd2cjjAkYUagF3xnGzKwl9LJW">
                                <input name="type" type="hidden" value="Laracasts\Series">
                                <button type="submit" class="course-watch-later-button tt naked-btn icon-clock-2-1" title=""
                                        data-delay="500" data-original-title="Watch Later">
                                </button>
                            </form>
                        </div>

                        <!-- This displays the favorited form and heart icon thing -->
                        <div class="course-favorite">
                            <form method="POST" action="https://laracasts.com/courses/11/favorite" accept-charset="UTF-8"
                                  class="favorite-form"><input name="_token" type="hidden"
                                                               value="DZre7aGUOk9jKWPcd2cjjAkYUagF3xnGzKwl9LJW">
                                <input name="course_type" type="hidden" value="series">
                                <button type="submit" class="icon-heart-1-1 not-favorite naked-btn tt" title="" data-delay="500"
                                        data-original-title="Favorite course">
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="course-block-excerpt">
                        <p>{{ $course->excerpt }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    @endforeach
    </div>
@endsection
