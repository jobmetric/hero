<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Hero\Events\HeroBootedEvent;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Translation\ServiceType\TranslationBuilder;
use Throwable;

class AddTaxonomyTypeListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(HeroBootedEvent $event): void
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

        // ticket_status
        TaxonomyType::define('ticket_status')
            ->label('hero::base.taxonomy_type.ticket_status.label')
            ->description('hero::base.taxonomy_type.ticket_status.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('hero::base.taxonomy_type.ticket_status.translation.description.label')
                        ->info('hero::base.taxonomy_type.ticket_status.translation.description.info')
                        ->placeholder('hero::base.taxonomy_type.ticket_status.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });
    }
}
