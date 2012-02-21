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

	public $authAdapter = array(
		'class' => 'YiiAuth',
	);

	public $searchAdapter = array(

	);

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

	/**
	 * @var IWikiAuth
	 */
	private $_auth;

	public function getAuth()
	{
		if($this->_auth===null)
		{
			$this->_auth = Yii::createComponent($this->authAdapter);
		}
		return $this->_auth;
	}
}
