<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Form\FormBuilder;
use JobMetric\Form\Group\GroupBuilder;
use JobMetric\Form\Tab\TabBuilder;
use JobMetric\Setting\Facades\SettingType;
use Throwable;

class AddSettingTypeListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(): void
    {
        SettingType::define('hero_config')
            ->label('hero::base.setting_type.hero_config.label')
            ->description('hero::base.setting_type.hero_config.description')
            ->form(function (FormBuilder $formBuilder) {
                $formBuilder
                    ->tab(function (TabBuilder $tabBuilder) {
                        $tabBuilder
                            ->id('general')
                            ->label('hero::base.setting_type.hero_config.tab.general.label')
                            ->selected()
                            ->group(function (GroupBuilder $groupBuilder) {
                                $groupBuilder
                                    ->label('hero::base.setting_type.hero_config.tab.general.group_base_label')
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('hero::base.setting_type.hero_config.tab.general.site_name')
                                            ->name('hero_config_site_name', 'site_name');
                                    })
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('hero::base.setting_type.hero_config.tab.general.site_name')
                                            ->name('hero_config_enable_sell', 'enable_sell');
                                    });
                            });
                    });
            });
    }
}
