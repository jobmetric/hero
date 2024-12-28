<?php

namespace JobMetric\Hero\Listeners;

use Illuminate\Support\Facades\DB;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Taxonomy\Models\Taxonomy;
use Throwable;

class SetTaxonomyTypeLabelFieldMenuListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(): void
    {
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
                TaxonomyType::type('menu_' . $menu->id)
                    ->label($menu->name);
            });
    }
}
