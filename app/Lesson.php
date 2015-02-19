<?php namespace App;

use Carbon\Carbon;
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

	protected $dates = ['published_at'];

	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	public function course()
	{
		return $this->belongsTo('App\Course');
	}

}
