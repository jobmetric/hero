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
            \JobMetric\Hero\Listeners\AddSettingTypeListeners::class,
            \JobMetric\Hero\Listeners\AddTaxonomyTypeListeners::class,
            \JobMetric\Hero\Listeners\AddPanelMenuListeners::class,
        ],
    ];
}
