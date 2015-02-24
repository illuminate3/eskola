<?php namespace App\Presenters;

use Laracasts\Presenter\Presenter;

/**
 * Class CoursePresenter
 * @property mixed name
 * @package App\Presenters
 */
class CoursePresenter extends Presenter {

    /**
     * @return string
     */
    public function fullName()
    {
    return $this->name . ' ' . $this->surename;
    }

    /**
     * @return mixed
     */
    public function accountAge()
    {
    return $this->created_at->diffForHumans();
    }

    public function lessonsCount()
    {
        $count = $this->entity->lessons()->count();
        $plural = str_plural('Lesson', $count);
        return "{$count} {$plural}";
    }

}