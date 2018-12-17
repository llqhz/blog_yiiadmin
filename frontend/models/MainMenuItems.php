<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/11
 * Time: 17:39
 */

namespace frontend\models;


class MainMenuItems
{
    public static function getItems()
    {
        $id = \Yii::$app->user->id;
        return self::menuItems();
    }


    public static function menuItems()
    {
        return [
            ["label" => "Home", "url" => ["hello/hello"], "icon" => "home"],
            ["label" => "Layout", "url" => ["site/layout"], "icon" => "files-o"],
            ["label" => "Error page", "url" => ["site/error-page"], "icon" => "close"],
            [
                "label" => "Widgets",
                "icon" => "th",
                "url" => "#",
                "items" => [
                    ["label" => "Menu", "url" => ["site/menu"]],
                    ["label" => "User", "url" => ["hello/user-center"]],
                    ["label" => "BlogUser", "url" => ["hello/blog-user"]],
                    ["label" => "Form", "url" => ["hello/form"]],
                    ["label" => "Say", "url" => ["hello/say"]],
                    ["label" => "Happy", "url" => ["hello/happy"]],
                    ["label" => "Panel", "url" => ["hello/panel"]],
                ],
            ],
            [
                "label" => "Badges",
                "url" => "#",
                "icon" => "table",
                "items" => [
                    [
                        "label" => "Default",
                        "url" => "#",
                        "badge" => "123",
                    ],
                    [
                        "label" => "Success",
                        "url" => "#",
                        "badge" => "new",
                        "badgeOptions" => ["class" => "label-success"],
                    ],
                    [
                        "label" => "Danger",
                        "url" => "#",
                        "badge" => "!",
                        "badgeOptions" => ["class" => "label-danger"],
                    ],
                ],
            ],
            [
                "label" => "Multilevel",
                "url" => "#",
                "icon" => "table",
                "items" => [
                    [
                        "label" => "Second level 1",
                        "url" => "#",
                    ],
                    [
                        "label" => "Second level 2",
                        "url" => "#",
                        "items" => [
                            [
                                "label" => "Third level 1",
                                "url" => "#",
                            ],
                            [
                                "label" => "Third level 2",
                                "url" => "#",
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}