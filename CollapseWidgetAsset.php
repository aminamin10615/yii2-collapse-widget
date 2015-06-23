<?php

namespace tejrajs\collapsewidget;

use yii\web\AssetBundle;
use Yii;
/**
 * This is just an example.
 */
class CollapseWidgetAsset extends AssetBundle
{
	public $depends = [
			'yii\web\JqueryAsset',
			'yii\web\YiiAsset',
			'yii\bootstrap\BootstrapAsset',
	];
	public $js = ['wigets.js'];
	public $css = ['assets/css/wigets.css','assets/css/glyphicons_regular.css'];
	public $sourcePath = '@vendor/tejrajs/yii2-fullcalendar/assets';

}
