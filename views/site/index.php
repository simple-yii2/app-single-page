<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use cms\settings\frontend\helpers\Setting;

$title = Setting::get('title');
$description = Setting::get('description');
$keywords = Setting::get('keywords');

$this->title = empty($title) ? $model->title : $title;

if (!empty($description))
	$this->registerMetaTag(['name' => 'description', 'content' => $description], 'description');

if (!empty($keywords))
	$this->registerMetaTag(['name' => 'keywords', 'content' => $keywords], 'keywords');

echo $model->content;
