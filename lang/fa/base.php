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

    "panel_name" => "پنل ادمین (Hero)",

    "description" => "یک پنل مدیریت قدرتمند و بصری برای مدیریت آسان و کارآمد برنامه شما.",

    "sections" => [
        "content" => [
            "name" => "محتوا",
            "title" => "مدیریت محتوا",
            "menus" => [
                "group_product" => "محصول و خدمت",
            ]
        ],
        "sell" => [
            "name" => "فروش",
            "title" => "مدیریت فروش",
            "menus" => [
                "group_sell" => "فروش",
                "orders" => "مدیریت سفارشات",
                "invoices" => "مدیریت فاکتورها",
                "group_advertising_and_marketing" => "تبلیغات و بازاریابی",
                "campaign" => "مدیریت کمپین‌ها",
                "group_financial_management" => "مدیریت مالی",
                "transaction" => "مدیریت تراکنش‌ها",
            ]
        ],
        "account" => [
            "name" => "حساب‌های کاربری",
            "title" => "حساب‌های کاربری",
            "menus" => [
                "users" => "کاربران",
                "group_employee" => "کارمندان و پرسنل",
                "employee" => "کارمندان",
                "department" => "دپارتمان‌ها",
                "group_report" => "گزارشات",
                "activity_logs" => "گزارش فعالیت‌ها",
                "wallet_transaction" => "تراکنش‌های کیف پول",
            ]
        ],
        "system" => [
            "name" => "مدیریت",
            "title" => "مدیریت سیستم",
            "menus" => [
                "setting" => "تنظیمات",
                "language" => "زبان‌ها",
                "group_places_and_regions" => "مکان‌ها و مناطق",
                "country" => "کشورها",
                "province" => "استان‌ها",
                "city" => "شهرها",
                "district" => "منطقه‌ها",
                "geo_zone" => "مناطق جغرافیایی",
                "group_support" => "پشتیبانی",
                "ticket_status" => "وضعیت‌های تیکت",
                "group_plugins_and_modules" => "افزونه‌ها و ماژول‌ها",
            ],
        ],
        "report" => [
            "name" => "گزارشات",
            "title" => "گزارشات مدیریتی",
            "menus" => [
                "group_system" => "گزارشات سیستم",
                "system_change_logs" => "گزارش تغییرات سیستم",
            ],
        ],
    ],

    "dashboard" => [
        "title" => "داشبورد پنل ادمین (Hero)",
        "tiles" => [
            "users" => "کاربران",
            "roles" => "نقش‌ها",
            "media" => "رسانه",
            "logs" => "گزارشات",
            "activity" => "فعالیت",
            "settings" => "تنظیمات",
        ],
    ],

    "taxonomy_type" => [
        "department" => [
            "label" => "دپارتمان‌ها",
            "description" => "تمام دپارتمان‌های سازمانی در اینجا قرار دارند.",
            "translation" => [
                "description" => [
                    "label" => "توضیحات",
                    "info" => "توضیحات دپارتمان",
                    "placeholder" => "توضیحات دپارتمان را وارد کنید",
                ],
            ],
        ],

        "ticket_status" => [
            "label" => "وضعیت‌های تیکت",
            "description" => "تمام وضعیت‌های تیکت‌ها در اینجا قرار دارند.",
            "translation" => [
                "description" => [
                    "label" => "توضیحات",
                    "info" => "توضیحات وضعیت تیکت",
                    "placeholder" => "توضیحات وضعیت تیکت را وارد کنید",
                ],
            ],
        ],
    ],

];
