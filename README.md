collapse widget
===============
collapse widget

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tejrajs/yii2-collapse-widget "*"
```

or add

```
"tejrajs/yii2-collapse-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use tejrajs\collapsewidget\CollapseWidget;


<?php 
CollapseWidget::begin([
	'title'=>'Title',
	//'options' => [ 'data-collapse-closed' => 'true'],
]);
?>
<body>
<?php CollapseWidget::end();?>
```