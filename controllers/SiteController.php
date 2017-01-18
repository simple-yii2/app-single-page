<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
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
		if ($model === null)
			throw new NotFoundHttpException(Yii::t('yii', 'Page not found.'));

		return $this->render('index', ['model' => $model]);
	}

}
