<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Http\Requests;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Lesson extends Model implements SluggableInterface {

	use SluggableTrait;

	protected $sluggable = array(
		'build_from' => 'lesson_title',
		'save_to'    => 'lesson_slug',
	);

	protected $fillable = [
		'course_id',
		'lesson_title',
		'lesson_body',
		'lesson_published_at',
		'lesson_slug',
		'lesson_excerpt',
        'lesson_order'
	];

	protected $dates = ['lesson_published_at'];

	public function scopePublished($query)
	{
		$query->where('lesson_published_at', '<=', Carbon::now());
	}

	public function setSlugAttribute($lesson_slug)
	{
		$this->attributes['lesson_slug'] = Str::slug($lesson_slug);
	}

    public function setLessonOrderAttribute($lesson_order)
    {
        $courseId = Input::get('course_id');
        $lessonCount = Lesson::where( 'course_id', '=', $courseId)->count();
        $this->attributes['lesson_order'] = $lessonCount + 1;
    }

	public function course()
	{
		return $this->belongsTo('App\Course');
	}

	public function test()
	{
		return $this->hasOne('App\Test');
	}


}
