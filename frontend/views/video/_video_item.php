<?php
/** @var $model \common\models\Video */

use \yii\helpers\Url;

?>


<div class="card m-2 border-0" style="width: 14rem;">
    <a href="<?php echo Url::to(['/video/view', 'id' => $model->video_id]) ?>">
        <div class="ratio ratio-16x9 mb-0 bg-dark">
            <video src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>"></video>
        </div>
    </a>
    <div class="card-body p-2">
        <h5 class="card-title m-0"><?php echo $model->title ?></h5>
        <p class="text-muted card-text m-0"><?php echo $model->createdBy->username ?></p>
        <p class="text-muted card-text m-0"><?php echo $model->getViews()->count() ?> views
            . <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></p>
    </div>
</div>
