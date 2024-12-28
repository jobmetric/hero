<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Translation\ServiceType\TranslationBuilder;
use Throwable;

class TaxonomyTypeDepartmentListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(): void
    {
        // department
        TaxonomyType::define('department')
            ->label('hero::base.taxonomy_type.department.label')
            ->description('hero::base.taxonomy_type.department.description')
            ->hierarchical()
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('hero::base.taxonomy_type.department.translation.description.label')
                        ->info('hero::base.taxonomy_type.department.translation.description.info')
                        ->placeholder('hero::base.taxonomy_type.department.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            })
            ->baseMedia();
    }
}
