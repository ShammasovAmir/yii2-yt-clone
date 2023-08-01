<?php
/** @var $model \common\models\Video */

use \yii\helpers\Url;
use \yii\widgets\Pjax;
use \yii\helpers\Html;

?>
<div class="row">
    <div class="col-sm-8">
        <div class="ratio ratio-16x9 mb-3 bg-dark">
            <video src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   controls></video>
        </div>
        <h6><?php echo $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <?php echo $model->getViews()->count() ?> views
                • <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
            </div>
            <div>
                <?php Pjax::begin() ?>
                <?php echo $this->render('_buttons', [
                    'model' => $model
                ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
        <div>
            <p>
                <?php echo Html::a($model->createdBy->username, [
                    '/channel/view', 'username' => $model->createdBy->username
                ]) ?>
            </p>
            <?php echo Html::encode($model->description) ?>
        </div>
    </div>
    <div class="col-sm-4"></div>

</div>