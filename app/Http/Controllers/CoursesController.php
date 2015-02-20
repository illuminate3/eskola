<?php namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;

/**
 * Class CoursesController
 * @package App\Http\Controllers
 */
class CoursesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Course::latest('published_at')->published()->get();
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

		return redirect('courses');
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
		$course = Course::where('slug', $slug)->first();

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

		return redirect('courses');
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
