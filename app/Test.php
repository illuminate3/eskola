<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

    protected $fillable = ['title', 'body', 'slug', 'published_at'];

    public function leson()
    {
        return $this->belongsTo('App\Lesson');
    }

}
