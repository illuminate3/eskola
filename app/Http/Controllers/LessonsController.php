<?php namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use App\Test;
use App\Http\Requests\LessonRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LessonsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lessons = Lesson::with('course')->get();
		return view('lessons.index', compact('lessons'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$courses = Course::lists('course_title', 'id');

		return view('lessons.create', compact('courses'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(LessonRequest $request)
	{
		Lesson::create($request->all());

		return redirect('lessons');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param $lesson_slug
	 * @return Response
	 * @internal param int $id
	 */
	public function show($course_slug, $lesson_slug)
	{
		$lesson = Lesson::with('course')->where('lesson_slug', $lesson_slug)->first();
		return view('lessons.show', compact('lesson'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$lesson = Lesson::findOrFail($id);
		$courses = Course::lists('course_title', 'id');
		return view('lessons.edit', compact('lesson', 'courses'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, LessonRequest $request)
	{
		$lesson = Lesson::findOrFail($id);
		$lesson->update($request->all());

		return redirect('lessons');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showLessonTest()
	{
		$test = Lesson::find(1)->test;
		$lesson = Lesson::find(1);
		return 'this is lesson with ID of'. $lesson->id . '  and this is that test title:' .$test->test_title;
	}

}
