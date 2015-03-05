<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TestRequest extends Request {

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
			'test_title' => 'required|min:3',
			'test_body' => 'required|min:3',
			'lesson_id' => 'required|exists:lessons,id',
			'test_published_at' => 'required|date'
		];
	}

}
