@extends('panelio::layout.layout')

@section('body')
    <div class="row gy-5 g-xl-10">
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-link name="{{ trans('hero::base.dashboard.tiles.users') }}">
                <i class="ki-duotone ki-compass fs-7x text-gray-600 mb-10">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-link>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-link name="{{ trans('hero::base.dashboard.tiles.roles') }}">
                <i class="ki-duotone ki-chart-simple fs-7x text-gray-600 mb-10">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </x-tile-link>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-link name="{{ trans('hero::base.dashboard.tiles.media') }}">
                <i class="ki-duotone ki-abstract-39 fs-7x text-gray-600 mb-10">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-link>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-link name="{{ trans('hero::base.dashboard.tiles.activity') }}">
                <i class="ki-duotone ki-map fs-7x text-gray-600 mb-10">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
            </x-tile-link>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-link name="{{ trans('hero::base.dashboard.tiles.logs') }}">
                <i class="ki-duotone ki-abstract-35 fs-7x text-gray-600 mb-10">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-link>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-link name="{{ trans('hero::base.dashboard.tiles.settings') }}">
                <i class="ki-duotone ki-abstract-26 fs-7x text-gray-600 mb-10">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-link>
        </div>
    </div>
@endsection
