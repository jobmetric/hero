<?php

namespace JobMetric\Hero\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use JobMetric\Panelio\Http\Controllers\Controller;

class HeroController extends Controller
{
    /**
     * index hero
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        DomiTitle(trans('hero::base.dashboard.title'));

        return view('hero::dashboard');
    }
}
