<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Library */

$this->title = 'Update Library: ' . $model->书名;
$this->params['breadcrumbs'][] = ['label' => 'Libraries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->书名, 'url' => ['view', 'id' => $model->书名]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="library-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
