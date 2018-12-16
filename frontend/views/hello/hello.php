<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/11
 * Time: 15:59
 */

use yii\helpers\Url;

?>



<h1>Hello -> hello</h1>
<a href="<?= Url::toRoute('site/about') ?>">跳转到about页面</a>

<br>

<?= \frontend\components\widgets\MainMenuItems::widget(['items' => ['a'=>2]]) ?>