<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $fillable = [
		'title',
		'body',
		'published_at',
		'slug',
		'excerpt'
	];

	public function lessons()
	{
		return $this->hasMany('App\Lesson');
	}

}
