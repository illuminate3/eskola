<?php namespace App\Http\Controllers;

use App\Answer;
use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AnswerRequest;
use App\Lesson;
use App\Test;
use Illuminate\Http\Request;

class AnswersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
       $answers = Answer::with('user')->get();
        //return view('courses.index')->with('courses', $courses); =
        return view('answers.index', compact('answers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create($course_id, $lesson_id, $test_id)
    {
        $lesson = Lesson::find(1);

        return view('answers.create', ['lesson' => $lesson, 'course_id' => $course_id, 'lesson_id' => $lesson_id, 'test_id' => $test_id ]);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(AnswerRequest $request)
    {
       $answer = Answer::create($request->all());

        dd($answer);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
