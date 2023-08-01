<?php

namespace frontend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use \common\models\User;
use \yii\web\NotFoundHttpException;

class ChannelController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['subscribe'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    public function actionView($username)
    {
        $channel = $this->findChannel($username);

        return $this->render('view', [
            'channel' => $channel
        ]);
    }

    public function actionSubscribe($username)
    {
        $channel = $this->findChannel($username);

    }

    /**
     * @param $username
     * @return User
     * @throws NotFoundHttpException
     */
    protected function findChannel($username)
    {
        $channel = User::findByUsername($username);
        if (!$channel) throw new NotFoundHttpException("Channel does not exist");

        return $channel;
    }
}