<?php
/*
*@auther : Tej Raj Shrestha
*/
namespace tejrajs\collapsewidget;


use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\base\Widget;
/**
 * This is just an example.
 */
class CollapseWidget extends Widget
{
	public $options = [];
	public $title = false;
	public $renderInnerContainer = true;
	
	public function init()
    {
        parent::init();
        //$this->clientOptions = false;
        Html::addCssClass($this->options, 'widget');
        if (empty($this->options['data-toggle'])) {
        	$this->options['data-toggle'] = 'collapse-widget';
        }
        $tag = ArrayHelper::remove($this->options, 'tag', 'div');
        echo Html::beginTag($tag, $this->options);
        echo Html::tag('div',Html::tag('h4',$this->title,['class'=>'heading']), ['class' => 'widget-head']);
        echo Html::beginTag('div',['class'=>'widget-body']);
	}
	
	public function run()
	{
		$view = $this->getView();
		CollapseWidgetAsset::register($view);
		echo Html::endTag('div');
		$tag = ArrayHelper::remove($this->options, 'tag', 'div');
		echo Html::endTag($tag);
		
		
	}
}
