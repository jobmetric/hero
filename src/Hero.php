<?php

namespace JobMetric\Hero;

use Illuminate\Contracts\Foundation\Application;

class Hero
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * Create a new Hero instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
