<?php

namespace app\controllers;

use yii\web\Controller;
use cms\page\common\models\Page;

class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Page::find()->one();

        if ($model === null) {
            return $this->render('index');
        } else {
            return $this->render('page', ['model' => $model]);
        }
    }

}
