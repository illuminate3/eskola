<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use Illuminate\Support\Str;
use App\Http\Requests;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Laracasts\Presenter\PresentableTrait;

class Test extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
        'unique'     => true,
    );

    protected $fillable = ['title', 'body', 'slug', 'published_at'];

    public function leson()
    {
        return $this->belongsTo('App\Lesson');
    }

}
