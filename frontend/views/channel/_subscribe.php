<?php
/** @var $channel \common\models\User */

use \yii\helpers\Url;

?>
<a href="<?php Url::to([
    'channel/subscribe',
    'username' => $channel->username
]) ?>" class="btn btn-danger" role="button" data-method="POST"
   data-pjax="1"
>
    Subscribe <i class="fa-regular fa-bell"></i>
</a> 9
