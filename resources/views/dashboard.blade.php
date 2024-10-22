@extends('panelio::layout.layout')

@section('body')
    <div class="row gy-5 g-xl-10">
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <a href="javascript:void(0)" class="card-body w-100 text-center">
                    <i class="ki-duotone ki-compass fs-7x text-gray-600 mb-10">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="fw-semibold fs-3 text-gray-400">{{ trans('hero::base.dashboard.tiles.users') }}</span>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body w-100 text-center">
                    <i class="ki-duotone ki-chart-simple fs-7x text-gray-600 mb-10">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <span class="fw-semibold fs-3 text-gray-400">{{ trans('hero::base.dashboard.tiles.roles') }}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body w-100 text-center">
                    <i class="ki-duotone ki-abstract-39 fs-7x text-gray-600 mb-10">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="fw-semibold fs-3 text-gray-400">{{ trans('hero::base.dashboard.tiles.media') }}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body w-100 text-center">
                    <i class="ki-duotone ki-map fs-7x text-gray-600 mb-10">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                    <span class="fw-semibold fs-3 text-gray-400">{{ trans('hero::base.dashboard.tiles.activity') }}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body w-100 text-center">
                    <i class="ki-duotone ki-abstract-35 fs-7x text-gray-600 mb-10">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="fw-semibold fs-3 text-gray-400">{{ trans('hero::base.dashboard.tiles.logs') }}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body w-100 text-center">
                    <i class="ki-duotone ki-abstract-26 fs-7x text-gray-600 mb-10">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="fw-semibold fs-3 text-gray-400">{{ trans('hero::base.dashboard.tiles.settings') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
