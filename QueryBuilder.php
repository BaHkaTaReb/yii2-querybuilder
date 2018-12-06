<?php

namespace leandrogehlen\querybuilder;

use yii\helpers\ArrayHelper;

/**
 * QueryBuilder renders a jQuery QueryBuilder component.
 *
 * @see http://mistic100.github.io/jQuery-QueryBuilder/
 * @author Leandro Gehlen <leandrogehlen@gmail.com>
 */
class QueryBuilder extends \soluto\plugin\Widget {

    /**
     * @inheridoc
     */
    public $pluginName = 'queryBuilder';

    /**
     * @inheritdoc
     */
	protected function assets()
	{

		$assets = [
			QueryBuilderAsset::class
		];

		if ($langCode = ArrayHelper::getValue($this->pluginOptions,'lang_code')) {
			$langCode = ucfirst($langCode);
			$assets[] =  __NAMESPACE__ . "\i18n\QueryBuilder{$langCode}Asset";
		}

		return $assets;
	}

}
