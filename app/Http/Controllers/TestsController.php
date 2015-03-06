<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lesson;
use App\Test;
use App\Http\Requests\TestRequest;

class TestsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $tests = Test::with('lesson')->get();
		//return view('tests.index')->with('Tests', $Tests); =
		return view('tests.index', compact('tests'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $lessons = Lesson::with('course')->get();

        return view('tests.create', compact('lessons'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(TestRequest $request)
    {
        Test::create($request->all());
        flash()->success('Your test has been created!');
        return redirect('tests');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($lesson_slug, $id)
    {
        $test = Test::with('lesson')->where('id', $id)->first();
        return view('tests.show', compact('test'));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        $test = Test::findOrFail($id);
        $lessons = Lesson::lists('lesson_title', 'id');
        return view('tests.edit', compact('test', 'lessons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, TestRequest $request)
    {
        $test = Test::findOrFail($id);
        $test->update($request->all());

        return redirect('tests');
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
