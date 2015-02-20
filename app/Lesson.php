<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Http\Requests;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Lesson extends Model implements SluggableInterface {

	use SluggableTrait;

	protected $sluggable = array(
		'build_from' => 'title',
		'save_to'    => 'slug',
	);

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

	public function setSlugAttribute($slug)
	{
		$this->attributes['slug'] = Str::slug($slug);
	}

	public function course()
	{
		return $this->belongsTo('App\Course');
	}


}
