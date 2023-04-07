<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Cars<h1>
<ul>
    <?php foreach($cars as $car): ?>
        <li>
            <?= Html::encode("{$car->brand} ({$car->name}) {$car->color}") ?>
        </li>
    <?php endforeach; ?>
<ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>