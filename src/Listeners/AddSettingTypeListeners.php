<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Form\FormBuilder;
use JobMetric\Form\Group\GroupBuilder;
use JobMetric\Form\Tab\TabBuilder;
use JobMetric\Hero\Events\HeroBootedEvent;
use JobMetric\Setting\Facades\SettingType;
use Throwable;

class AddSettingTypeListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(HeroBootedEvent $event): void
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
                                    ->label('hero::base.setting_type.hero_config.tab.general.group_product_label')
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('hero::base.setting_type.hero_config.tab.general.product_limit')
                                            ->validation('required|integer')
                                            ->name('hero_config_product_limit', 'product_limit');
                                    })
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('hero::base.setting_type.hero_config.tab.general.comment')
                                            ->name('hero_config_comment', 'comment');
                                    });
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('hero::base.setting_type.hero_config.tab.general.min_gift_cart')
                                    ->name('hero_config_min_gift_cart', 'min_gift_cart');
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('hero::base.setting_type.hero_config.tab.general.max_gift_cart')
                                    ->name('hero_config_max_gift_cart', 'max_gift_cart');
                            });
                    });
            });
    }
}
