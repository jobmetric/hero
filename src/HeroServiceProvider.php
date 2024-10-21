<?php

namespace JobMetric\Hero;

use JobMetric\Hero\Providers\EventServiceProvider;
use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Panelio\RouteRegistry;

class HeroServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('hero')
            ->hasConfig()
            ->hasTranslation()
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Hero', Hero::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterRegisterPackage(): void
    {
        RouteRegistry::addPanel($this->package);
    }

    public function afterBootPackage(): void
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
                'icon' => 'fas fa-user-shield',
            ],
            'permission' => 'hero.content',
            'position' => 0,
        ]);

        Panelio::addMenu('hero', 'content', [
            'type' => 'group',
            'name' => 'hero::base.sections.content.menus.products',
            'permission' => 'hero.content.products',
            'position' => 0
        ]);
    }
}
