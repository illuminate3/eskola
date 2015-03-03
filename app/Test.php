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
        'build_from' => 'test_title',
        'save_to'    => 'test_slug',
        'unique'     => true,
    );

    protected $fillable = ['test_title', 'test_body', 'test_slug', 'test_published_at'];

    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }

}
