<?php namespace App\Presenters;

use Illuminate\Support\Facades\Auth;
use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function fullName()
    {
    return Auth::user()->name . ' ' . Auth::user()->surename;
    }

    public function accountAge()
    {
    return Auth::user()->created_at->diffForHumans();
    }

}