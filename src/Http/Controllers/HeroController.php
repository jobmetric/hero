<?php

namespace JobMetric\Hero\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HeroController extends Controller
{
    /**
     * index hero
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('hero::index');
    }
}
