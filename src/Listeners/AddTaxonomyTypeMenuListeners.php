<?php

namespace JobMetric\Hero\Listeners;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Translation\ServiceType\TranslationBuilder;
use Throwable;

class AddTaxonomyTypeMenuListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(): void
    {
        // menu
        TaxonomyType::define('menu')
            ->label('hero::base.taxonomy_type.menu.label')
            ->description('hero::base.taxonomy_type.menu.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('hero::base.taxonomy_type.department.translation.description.label')
                        ->info('hero::base.taxonomy_type.department.translation.description.info')
                        ->placeholder('hero::base.taxonomy_type.department.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });

        $taxonomy_table = config('taxonomy.tables.taxonomy');
        if (Schema::hasTable($taxonomy_table)) {
            DB::query()
                ->from($taxonomy_table)
                ->select('id')
                ->where('type', 'menu')
                ->get()->each(function ($menu) {
                    TaxonomyType::define('menu_' . $menu->id)
                        ->changeStatusInList()
                        ->baseMedia();
                });
        }
    }
}
