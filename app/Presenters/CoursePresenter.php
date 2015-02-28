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
    public function courseAge()
    {
    return $this->created_at->diffForHumans();
    }

    /**
     * @return string
     */
    public function lessonsCount()
    {
        $count = $this->entity->lessons()->count();
        $plural = str_plural('Lesson', $count);
        return "{$count} {$plural}";
    }

    /**
     * Returns created_at in different format
     *
     * @return string
     */
    public function createdAt()
    {
        return $this->created_at->toFormattedDateString();
    }


}