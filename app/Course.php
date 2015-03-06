<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Http\Requests;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Laracasts\Presenter\PresentableTrait;

class Course extends Model implements SluggableInterface {

	use SluggableTrait, PresentableTrait;

	protected $sluggable = array(
		'build_from' => 'course_title',
		'save_to'    => 'course_slug',
	);

	protected $presenter = 'App\Presenters\CoursePresenter';

	protected $fillable = [
		'course_title',
		'course_body',
		'course_published_at',
		'course_slug',
		'course_excerpt'
	];
	protected $dates = ['course_published_at'];

	public function scopePublished($query)
	{
		$query->where('course_published_at', '<=', Carbon::now());
	}

	public function setPublishedAtAttribute($date)
	{
		$this->attributes['course_published_at'] = Carbon::parse($date);
	}

	public function setSlugAttribute($course_slug)
	{
		$this->attributes['course_slug'] = Str::slug($course_slug);
	}

	public function lessons()
	{
		return $this->hasMany('App\Lesson');
	}
	public function courses()
	{
		return $this->belongsToMany('App\Courses', 'user_courses', 'user_id', 'course_id');
	}

	public function tests()
	{
		return $this->hasManyThrough('App\Test', 'App\Lesson');
	}

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

}
