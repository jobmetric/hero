<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\Taxonomy\Events\TaxonomyTypeEvent;

class AddTaxonomyTypeDepartmentListeners
{
    /**
     * Handle the event.
     */
    public function handle(TaxonomyTypeEvent $event): void
    {
        $event->addType([
            'type' => 'department',
            'args' => [
                'label' => 'hero::base.taxonomy_type.department.label',
                'description' => 'hero::base.taxonomy_type.department.description',
                'hierarchical' => true,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'hero::base.taxonomy_type.department.translation.name.label',
                            'info' => 'hero::base.taxonomy_type.department.translation.name.info',
                            'placeholder' => 'hero::base.taxonomy_type.department.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'hero::base.taxonomy_type.department.translation.description.label',
                            'info' => 'hero::base.taxonomy_type.department.translation.description.info',
                            'placeholder' => 'hero::base.taxonomy_type.department.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                ],
                'has_base_media' => true,
            ],
        ]);
    }
}
