<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/12
 * Time: 10:24
 */

use yiister\gentelella\widgets\Panel;
use yiister\gentelella\widgets\FlashAlert;

?>

<div class="col-md-4 col-xs-12">
    <?php Panel::begin(); ?>
    <p>最小的Pannel</p>
    <?php Panel::end() ?>
</div>

<div class="col-md-4 col-xs-12">
    <?php Panel::begin([
        'header' => '面板标题',
        'icon' => 'cog',
        'collapsable' => true, // 默认展开
        'removable' => true,
        'headerMenu' => [
            [
                'label' => 'The first item',
                'url' => '#',
            ],
            [
                'label' => 'The second item',
                'url' => '#',
            ],
        ],
        'tools' => [
            [
                'encode' => false,
                'items' => [],
                'label' => new \rmrevin\yii\fontawesome\component\Icon('bar-chart'),
            ],
            [
                'encode' => false,
                'items' => [
                    [
                        'label' => 'The first chart',
                        'url' => '#',
                    ],
                    [
                        'label' => 'The second list',
                        'url' => '#',
                    ],
                ],
                'label' => new \rmrevin\yii\fontawesome\component\Icon('list'),
            ],
        ],
    ]); ?>
    <p>面板Html内容</p>
    <p>可折叠, 可删除, 带菜单, 带按钮, 自适应高度</p>
    <?php Panel::end(); ?>
</div>

<div class="col-md-4 col-xs-12">
    <?= FlashAlert::widget(['showHeader' => true, 'options' => []]) ?>
</div>


<div class="row">
    <div class="col-xs-12">
        多折叠pannel
    </div>
</div>
