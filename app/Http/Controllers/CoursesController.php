<?php namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CoursesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Course::with('lessons')->published()->get();
		//return view('courses.index')->with('courses', $courses); =
		return view('courses.index', compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CreateCourseRequest $request
	 * @return Response
	 */
	public function store(CourseRequest $request)
	{
		Course::create($request->all());

		flash()->success('Your course has been created!');

		return redirect('courses');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param $course_slug
	 * @return Response
	 * @internal param int $id
	 */
	public function show($course_slug)
	{
		$course = Course::with('lessons')->where('course_slug', $course_slug)->first();

		return view('courses.show', compact('course'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course = Course::findOrFail($id);

		return view('courses.edit', compact('course'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CourseRequest $request)
	{
		$course = Course::findOrFail($id);

		$course->update($request->all());
		flash()->success('"' . $course->course_title . '" has been edited successfully!');
		return redirect( action('CoursesController@show', [$course->course_slug]) );
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
