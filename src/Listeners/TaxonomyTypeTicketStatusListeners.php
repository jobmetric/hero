<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Translation\Typeify\TranslationBuilder;
use Throwable;

class TaxonomyTypeTicketStatusListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(): void
    {
        // ticket_status
        TaxonomyType::define('ticket_status')
            ->label('hero::base.taxonomy_type.ticket_status.label')
            ->description('hero::base.taxonomy_type.ticket_status.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->import()
            ->export()
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
