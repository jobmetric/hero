<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Hero\Events\HeroBootedEvent;

class AddPanelMenuListeners
{
    /**
     * Handle the event.
     */
    public function handle(HeroBootedEvent $event): void
    {
        Panelio::addPanel('hero', [
            'name' => 'hero::base.panel_name',
            'namespace' => 'JobMetric\Hero\Http\Controllers',
            'args' => [
                'description' => 'hero::base.description',
                'icon' => '<i class="ki-duotone ki-abstract-25 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'hero',
            'position' => 0,
        ]);

        Panelio::addSection('hero', 'content', [
            'name' => 'hero::base.sections.content.name',
            'args' => [
                'title' => 'hero::base.sections.content.title',
                'icon' => '<i class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'hero.content',
            'position' => 0,
        ]);

        Panelio::addSection('hero', 'sell', [
            'name' => 'hero::base.sections.sell.name',
            'args' => [
                'title' => 'hero::base.sections.sell.title',
                'icon' => '<i class="ki-duotone ki-graph-up fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>',
            ],
            'permission' => 'hero.sell',
            'position' => 10,
        ]);

        Panelio::addSection('hero', 'account', [
            'name' => 'hero::base.sections.account.name',
            'args' => [
                'title' => 'hero::base.sections.account.title',
                'icon' => '<i class="ki-duotone ki-abstract-22 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'hero.account',
            'position' => 20,
        ]);

        Panelio::addSection('hero', 'system', [
            'name' => 'hero::base.sections.system.name',
            'args' => [
                'title' => 'hero::base.sections.system.title',
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'hero.system',
            'position' => 30,
        ]);

        Panelio::addSection('hero', 'report', [
            'name' => 'hero::base.sections.report.name',
            'args' => [
                'title' => 'hero::base.sections.report.title',
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'hero.report',
            'position' => 40,
        ]);

        // added menu for content section
        Panelio::addMenu('hero', 'content', [
            'type' => 'group',
            'name' => 'hero::base.sections.content.menus.group_product',
            'permission' => '',
            'position' => 0,
        ]);

        // added group menu for sale section
        Panelio::addMenu('hero', 'sell', [
            'type' => 'group',
            'name' => 'hero::base.sections.sell.menus.group_sell',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'sell', [
            'type' => 'group',
            'name' => 'hero::base.sections.sell.menus.group_advertising_and_marketing',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'sell', [
            'type' => 'group',
            'name' => 'hero::base.sections.sell.menus.group_financial_management',
            'permission' => '',
            'position' => 200,
        ]);

        // added group menu for account section
        Panelio::addMenu('hero', 'account', [
            'type' => 'group',
            'name' => 'hero::base.sections.account.menus.group_customer',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'account', [
            'type' => 'link',
            'name' => 'hero::base.sections.account.menus.department',
            'link' => route('taxonomy.{type}.index', [
                'panel' => 'hero',
                'section' => 'account',
                'type' => 'department',
            ]),
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 10,
        ]);

        // added group menu for system section
        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.language',
            'link' => route('language.language.index', [
                'panel' => 'hero',
                'section' => 'system'
            ]),
            'icon' => '<i class="ki-duotone ki-icon {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 10,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'group',
            'name' => 'hero::base.sections.system.menus.group_places_and_regions',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.country',
            'link' => route('location.location_country.index', [
                'panel' => 'hero',
                'section' => 'system'
            ]),
            'icon' => '<i class="ki-duotone ki-pointers {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 101,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'group',
            'name' => 'hero::base.sections.system.menus.group_plugins_and_modules',
            'permission' => '',
            'position' => 200,
        ]);
    }
}
