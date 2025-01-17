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

    "panel_name" => "Administrator (Hero)",

    "description" => "A powerful and intuitive admin panel for managing your application with ease and efficiency.",

    "sections" => [
        "content" => [
            "name" => "Content",
            "title" => "Content Management",
            "menus" => [
                "group_menu" => "Menu and List",
                "menu" => "Menu Management",
            ]
        ],
        "sell" => [
            "name" => "Sell",
            "title" => "Sell Management",
            "menus" => [
                "group_sell" => "Sell",
                "orders" => "Order Management",
                "invoices" => "Invoice Management",
                "group_advertising_and_marketing" => "Advertising and Marketing",
                "campaign" => "Campaign Management",
                "group_financial_management" => "Financial Management",
                "transaction" => "Transaction Management",
            ]
        ],
        "account" => [
            "name" => "Accounts",
            "title" => "Accounts",
            "menus" => [
                "users" => "Users",
                "group_employee" => "Employees and Staff",
                "employee" => "Employees",
                "department" => "Departments",
                "group_report" => "Reports",
                "activity_logs" => "Activity Logs",
                "wallet_transaction" => "Wallet Transactions",
            ]
        ],
        "system" => [
            "name" => "System",
            "title" => "System Management",
            "menus" => [
                "setting" => "Settings",
                "language" => "Languages",
                "group_sms" => "SMS Management",
                "sms_gateway" => "SMS Gateways",
                "sms" => "SMS",
                "group_places_and_regions" => "Places and Regions",
                "country" => "Countries",
                "province" => "Provinces",
                "city" => "Cities",
                "district" => "Districts",
                "geo_zone" => "Geo Zones",
                "group_support" => "Support",
                "ticket_status" => "Ticket Statuses",
                "group_plugins_and_modules" => "Plugins and Modules",
                "payment_method" => "Payment Methods",
            ],
        ],
        "report" => [
            "name" => "Reports",
            "title" => "Management Reports",
            "menus" => [
                "group_system" => "System",
                "system_change_logs" => "System Change Logs",
            ],
        ],
    ],

    "dashboard" => [
        "title" => "Administrator Dashboard (Hero)",
        "tiles" => [
            "users" => "Users",
            "roles" => "Roles",
            "media" => "Media",
            "logs" => "Logs",
            "activity" => "Activity",
            "settings" => "Settings",
        ],
    ],

    "taxonomy_type" => [
        "menu" => [
            "label" => "Menu Configuration",
            "description" => "In this section, you can manage various types of menus and lists.",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "Menu description",
                    "placeholder" => "Enter menu description",
                ],
            ],
        ],

        "department" => [
            "label" => "Departments",
            "description" => "Departments",
            "translation" => [
                "name" => [
                    "label" => "Name",
                    "info" => "Department name",
                    "placeholder" => "Enter department name",
                ],
                "description" => [
                    "label" => "Description",
                    "info" => "Department description",
                    "placeholder" => "Enter department description",
                ],
            ],
        ],

        "ticket_status" => [
            "label" => "Ticket Status",
            "description" => "Ticket status",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "Ticket status description",
                    "placeholder" => "Enter ticket status description",
                ],
            ],
        ],
    ],

];
