<?php

class WikiModule extends CWebModule
{
	/**
	 * @var array Markup transformations config used to process wiki page text
	 */
	public $markupProcessors = array(
		array(
			'class' => 'MarkdownMarkup',
			'purify' => true,
		),
	);

	public $authAdapter;

	public $searchAdapter;

	/**
	 * @var AbstractMarkup[]
	 */
	private $_markupProcessors;

	public function init()
	{
		// import the module-level models and components
		$this->setImport(array(
			'wiki.models.*',
			'wiki.components.*',
		));

		Yii::app()->clientScript->registerCssFile(
		    Yii::app()->assetManager->publish(
		        Yii::getPathOfAlias('wiki.assets').'/wiki.css'
		    )
		);
	}

	/**
	 * @return AbstractMarkup[]
	 */
	public function getMarkupProcessors()
	{
		if($this->_markupProcessors===null)
		{
			Yii::import('wiki.components.markup.*');
			foreach($this->markupProcessors as $markupConfig)
			{
				$this->_markupProcessors[] = Yii::createComponent($markupConfig);
			}

		}
		return $this->_markupProcessors;
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
