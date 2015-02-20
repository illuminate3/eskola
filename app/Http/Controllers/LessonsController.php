<?php namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\LessonRequest;
use App\Lesson;
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
		$lessons = Lesson::latest('published_at')->published()->get();
		//return view('lessons.index')->with('Lessons', $Lessons); =
		return view('lessons.index', compact('lessons'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$courses = Course::lists('title', 'id');

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
	 * @param $slug
	 * @return Response
	 * @internal param int $id
	 */
	public function show($slug)
	{
		$lesson = Lesson::where('slug', $slug)->first();

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
		$courses = Course::lists('title', 'id');
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

}
