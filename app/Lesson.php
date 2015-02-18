<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model {

	protected $fillable = [
		'course_id',
		'title',
		'body',
		'published_at',
		'slug',
		'excerpt'
	];

	public function course()
	{
		return $this->belongsTo('App\Course');
	}

}
