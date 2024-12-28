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
        \JobMetric\Hero\Events\HeroBootEvent::class => [
            \JobMetric\Hero\Listeners\AddSettingTypeListeners::class,
            \JobMetric\Hero\Listeners\TaxonomyTypeDepartmentListeners::class,
            \JobMetric\Hero\Listeners\TaxonomyTypeTicketStatusListeners::class,
            \JobMetric\Hero\Listeners\AddTaxonomyTypeMenuListeners::class,
        ],

        \JobMetric\Language\Events\Language\SetLocaleEvent::class => [
            \JobMetric\Hero\Listeners\SetTaxonomyTypeLabelFieldMenuListeners::class,
            \JobMetric\Hero\Listeners\AddPanelMenuListeners::class,
        ],
    ];
}
