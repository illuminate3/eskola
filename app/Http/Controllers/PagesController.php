<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

		public function dashboard()
	{
		$courses = ['New born', 'Prayers', 'Fasting', 'Worship'];
		return view('pages.dashboard', compact('courses'));
	}

}
