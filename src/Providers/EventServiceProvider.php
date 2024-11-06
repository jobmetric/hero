<?php

namespace JobMetric\Hero\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        \JobMetric\Hero\Events\HeroBootedEvent::class => [
            \JobMetric\Hero\Listeners\AddPanelMenuListeners::class,
        ],

        \JobMetric\Category\Events\CategoryTypeEvent::class => [
            \JobMetric\Hero\Listeners\AddCategoryTypeDepartmentListeners::class
        ],
    ];
}
