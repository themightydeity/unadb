<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Docs */

$this->title = 'Update Docs: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Docs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="docs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formUpdate', [
        'model' => $model,
    ]) ?>

</div>
