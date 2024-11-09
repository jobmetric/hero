<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Hero Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during Hero for
    | various messages that we need to display to the user.
    |
    */

    'panel_name' => 'پنل ادمین (Hero)',

    'description' => 'یک پنل مدیریت قدرتمند و بصری برای مدیریت آسان و کارآمد برنامه شما.',

    'sections' => [
        'content' => [
            'name' => 'محتوا',
            'title' => 'مدیریت محتوا',
            'menus' => [
                'group_product' => 'محصول و خدمت',
            ]
        ],
        'sell' => [
            'name' => 'فروش',
            'title' => 'مدیریت فروش',
            'menus' => [
                'group_sell' => 'فروش',
                'group_advertising_and_marketing' => 'تبلیغات و بازاریابی',
                'group_financial_management' => 'مدیریت مالی',
            ]
        ],
        'account' => [
            'name' => 'حساب‌های کاربری',
            'title' => 'حساب‌های کاربری',
            'menus' => [
                'group_customer' => 'مشتری‌ها',
                'department' => 'دپارتمان‌ها',
            ]
        ],
        'system' => [
            'name' => 'مدیریت',
            'title' => 'مدیریت سیستم',
            'menus' => [
                'group_plugins_and_modules' => 'افزونه‌ها و ماژول‌ها',
            ],
        ],
        'report' => [
            'name' => 'گزارشات',
            'title' => 'گزارشات مدیریتی',
        ],
    ],

    'dashboard' => [
        'title' => 'داشبورد پنل ادمین (Hero)',
        'tiles' => [
            'users' => 'کاربران',
            'roles' => 'نقش‌ها',
            'media' => 'رسانه',
            'logs' => 'گزارشات',
            'activity' => 'فعالیت',
            'settings' => 'تنظیمات',
        ],
    ],

    'taxonomy_type' => [
        'department' => [
            'label' => 'دپارتمان‌ها',
            'description' => 'تمام دپارتمان‌های سازمانی در اینجا قرار دارند.',
            'translation' => [
                'name' => [
                    'label' => 'نام',
                    'info' => 'نام دپارتمان',
                    'placeholder' => 'نام دپارتمان را وارد کنید',
                ],
                'description' => [
                    'label' => 'توضیحات',
                    'info' => 'توضیحات دپارتمان',
                    'placeholder' => 'توضیحات دپارتمان را وارد کنید',
                ],
            ],
        ],
    ],

];
