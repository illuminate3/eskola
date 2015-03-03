<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LessonRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'lesson_title' => 'required|min:3',
			'lesson_body' => 'required|min:3',
			'course_id' => 'required|exists:courses,id',
			'lesson_published_at' => 'required|date'
		];
	}

}
