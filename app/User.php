<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Laracasts\Presenter\PresentableTrait;

/**
 * Class User
 * @package App
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract, SluggableInterface {

	use Authenticatable, CanResetPassword, SluggableTrait, PresentableTrait;

	/**
	 * @var array
     */
	protected $sluggable = array(
		'build_from' => ['name', 'surename'],
		'save_to'    => 'slug',
		'separator'  => '.',
		'unique'     => true,
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	/**
	 * Path os presenter of user.
	 *
	 * @var string
	 */

	protected $presenter = 'App\Presenters\UserPresenter';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'slug', 'phone','surename'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * @return string
     */

	public function courses()
	{
		return $this->belongsToMany('App\Courses', 'user_courses', 'user_id', 'course_id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function roles()
	{
		return $this->belongsToMany('App\Role');
	}

}
