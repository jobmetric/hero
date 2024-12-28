<?php

namespace JobMetric\Hero\Listeners;

use Illuminate\Support\Facades\DB;
use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Taxonomy\Models\Taxonomy;

class AddPanelMenuListeners
{
    /**
     * Handle the event.
     */
    public function handle(): void
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
            'name' => 'hero::base.sections.content.menus.group_menu',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'content', [
            'type' => 'link',
            'name' => 'hero::base.sections.content.menus.menu_configuration',
            'link' => route('taxonomy.{type}.index', [
                'panel' => 'hero',
                'section' => 'content',
                'type' => 'menu',
            ]),
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'content', [
            'type' => 'link',
            'name' => 'hero::base.sections.content.menus.menu_manager',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>',
            'permission' => '',
            'position' => 0,
        ]);

        $taxonomy_table = config('taxonomy.tables.taxonomy');
        $translation_table = config('translation.tables.translation');
        $locale = app()->getLocale();
        DB::query()->from($taxonomy_table . ' as taxonomy')
            ->select('taxonomy.id as id', 't.value as name')
            ->leftJoin($translation_table . ' as t', function ($join) use ($locale) {
                $join->on('t.translatable_id', '=', 'taxonomy.id')
                    ->where('t.translatable_type', '=', Taxonomy::class)
                    ->where('t.locale', '=', $locale)
                    ->where('t.key', '=', 'name');
            })
            ->where('taxonomy.type', 'menu')
            ->get()->each(function ($menu) {
                Panelio::addSubmenu('hero', 'content', 'hero::base.sections.content.menus.menu_manager', [
                    'name' => $menu->name,
                    'link' => route('taxonomy.{type}.index', [
                        'panel' => 'hero',
                        'section' => 'content',
                        'type' => 'menu_' . $menu->id,
                    ]),
                    'permission' => '',
                    'position' => 0,
                ]);
            });

        // added group menu for sale section
        Panelio::addMenu('hero', 'sell', [
            'type' => 'group',
            'name' => 'hero::base.sections.sell.menus.group_sell',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'sell', [
            'type' => 'link',
            'name' => 'hero::base.sections.sell.menus.orders',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'sell', [
            'type' => 'link',
            'name' => 'hero::base.sections.sell.menus.invoices',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
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
            'type' => 'link',
            'name' => 'hero::base.sections.sell.menus.campaign',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'sell', [
            'type' => 'group',
            'name' => 'hero::base.sections.sell.menus.group_financial_management',
            'permission' => '',
            'position' => 200,
        ]);

        Panelio::addMenu('hero', 'sell', [
            'type' => 'link',
            'name' => 'hero::base.sections.sell.menus.transaction',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 200,
        ]);

        // added group menu for account section
        Panelio::addMenu('hero', 'account', [
            'type' => 'link',
            'name' => 'hero::base.sections.account.menus.users',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'account', [
            'type' => 'group',
            'name' => 'hero::base.sections.account.menus.group_employee',
            'permission' => '',
            'position' => 10,
        ]);

        Panelio::addMenu('hero', 'account', [
            'type' => 'link',
            'name' => 'hero::base.sections.account.menus.employee',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 10,
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

        Panelio::addMenu('hero', 'account', [
            'type' => 'group',
            'name' => 'hero::base.sections.account.menus.group_report',
            'permission' => '',
            'position' => 20,
        ]);

        Panelio::addMenu('hero', 'account', [
            'type' => 'link',
            'name' => 'hero::base.sections.account.menus.activity_logs',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 20,
        ]);

        Panelio::addMenu('hero', 'account', [
            'type' => 'link',
            'name' => 'hero::base.sections.account.menus.wallet_transaction',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 20,
        ]);

        // added group menu for system section
        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.configuration',
            'link' => route('setting.{type}.index', [
                'panel' => 'hero',
                'section' => 'system',
                'type' => 'hero_config',
            ]),
            'icon' => '<i class="ki-duotone ki-icon {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 10,
        ]);

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
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.province',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-pointers {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.city',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-pointers {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.district',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-pointers {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.geo_zone',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-pointers {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'group',
            'name' => 'hero::base.sections.system.menus.group_support',
            'permission' => '',
            'position' => 200,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'link',
            'name' => 'hero::base.sections.system.menus.ticket_status',
            'link' => route('taxonomy.{type}.index', [
                'panel' => 'hero',
                'section' => 'system',
                'type' => 'ticket_status',
            ]),
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 200,
        ]);

        Panelio::addMenu('hero', 'system', [
            'type' => 'group',
            'name' => 'hero::base.sections.system.menus.group_plugins_and_modules',
            'permission' => '',
            'position' => 300,
        ]);

        // added group menu for report section
        Panelio::addMenu('hero', 'report', [
            'type' => 'group',
            'name' => 'hero::base.sections.report.menus.group_system',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'report', [
            'type' => 'link',
            'name' => 'hero::base.sections.report.menus.system_change_logs',
            'link' => 'javascript:void(0)',
            'icon' => '<i class="ki-duotone ki-pointers {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            'permission' => '',
            'position' => 0,
        ]);
    }
}
