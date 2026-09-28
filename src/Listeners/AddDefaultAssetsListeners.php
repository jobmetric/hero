<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Form\FormBuilder;
use JobMetric\Form\Group\GroupBuilder;
use JobMetric\Form\Tab\TabBuilder;
use JobMetric\Setting\Facades\SettingType;
use Throwable;

class AddDefaultAssetsListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(): void
    {
        DomiScript('assets/vendor/authio/js/authio.js');
    }
}
