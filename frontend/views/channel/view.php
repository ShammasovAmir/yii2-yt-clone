<?php
/** @var $channel \common\models\User */

/** @var $this \yii\web\View */

use \yii\helpers\Url;
use \yii\widgets\Pjax;

?>

<div class="p-5 mb-4 bg-secondary-subtle rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"><?php echo $channel->username ?></h1>
        <hr class="my-4">
        <?php Pjax::begin() ?>
        <?php echo $this->render('_subscribe', [
            'channel' => $channel
        ]) ?>
        <?php Pjax::end() ?>
    </div>
</div>
