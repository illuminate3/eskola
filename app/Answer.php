<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laracasts\Presenter\PresentableTrait;
use App\Http\Requests\AnswerRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Controller;
class Answer extends Model {

    use PresentableTrait;

    protected $presenter = 'App\Presenters\AnswerPresenter';

    protected $fillable = [
        'answer_title',
        'answer_body',
        'answer_published_at',
        'user_id',
        'test_id',
        'lesson_id',
        'course_id',
    ];
    protected $dates = ['answer_published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['answer_published_at'] = Carbon::parse($date);
    }

    /**
     * Before submit, set user_id to Auth user id
     * @param $user_id
     */
    public function setUserIdAttribute($user_id)
    {
        $this->attributes['user_id'] = Auth::user()->id;
    }

    public function getCourseIdAttribute($course_id)
    {
        return $course_id;
    }

    public function setCourseIdAttribute(AnswerRequest $request, mixed $value)
    {
        $this->attributes['course_id'] = $value->course_id;
    }
//
//    public function scopePublished($query)
//    {
//        $query->where('answer_published_at', '<=', Carbon::now());
//    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }

    public function test()
    {
        return $this->belongsTo('App\Test');
    }
}
