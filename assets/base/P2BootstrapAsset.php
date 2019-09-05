<?php
/**
 * P2BootstrapAsset.php
 *
 * Yii2 asset for Bootstrap
 * http://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapAsset
 * @license MIT
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2BootstrapAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2BootstrapAsset',
 */

namespace p2m\assets\base;

class P2BootstrapAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'bootstrap';

	protected $assetData = [
		'package' => 'bootstrap',
		'version' => '4.3.1',
		'baseUrl' => 'https://stackpath.bootstrapcdn.com/bootstrap/##-version-##',
		'sourcePath' => '@npm/bootstrap/dist',
		'static' => [
			'js' => [
				'js/bootstrap.bundle.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'js' => [
				'js/bootstrap.bundle.min.js',
			],
		],
	];

	private $bootswatchIntegrity = array(
		'cerulean'  => 'sha384-C++cugH8+Uf86JbNOnQoBweHHAe/wVKN/mb0lTybu/NZ9sEYbd+BbbYtNpWYAsNP',
		'cosmo'     => 'sha384-uhut8PejFZO8994oEgm/ZfAv0mW1/b83nczZzSwElbeILxwkN491YQXsCFTE6+nx',
		'cyborg'    => 'sha384-mtS696VnV9qeIoC8w/PrPoRzJ5gwydRVn0oQ9b+RJOPxE1Z1jXuuJcyeNxvNZhdx',
		'darkly'    => 'sha384-w+8Gqjk9Cuo6XH9HKHG5t5I1VR4YBNdPt/29vwgfZR485eoEJZ8rJRbm3TR32P6k',
		'flatly'    => 'sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf',
		'journal'   => 'sha384-ciphE0NCAlD2/N6NUApXAN2dAs/vcSAOTzyE202jJx3oS8n4tAQezRgnlHqcJ59C',
		'litera'    => 'sha384-D/7uAka7uwterkSxa2LwZR7RJqH2X6jfmhkJ0vFPGUtPyBMF2WMq9S+f9Ik5jJu1',
		'lumen'     => 'sha384-iqcNtN3rj6Y1HX/R0a3zu3ngmbdwEa9qQGHdkXwSRoiE+Gj71p0UNDSm99LcXiXV',
		'lux'       => 'sha384-hVpXlpdRmJ+uXGwD5W6HZMnR9ENcKVRn855pPbuI/mwPIEKAuKgTKgGksVGmlAvt',
		'materia'   => 'sha384-SYbiks6VdZNAKT8DNoXQZwXAiuUo5/quw6nMKtFlGO/4WwxW86BSTMtgdzzB9JJl',
		'minty'     => 'sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM',
		'pulse'     => 'sha384-/uQFqO50IaQu2rNJYKPpV7zwsWJtd6V4DGX4wMw1ATz4KPuZEV96qQ2heVAw2kr2',
		'sandstone' => 'sha384-G3Fme2BM4boCE9tHx9zHvcxaQoAkksPQa/8oyn1Dzqv7gdcXChereUsXGx6LtbqA',
		'simplex'   => 'sha384-1OYccka9EByiS23wvPFiYHBPRAgU91xYVFb8g8sen6vRiBI5Uko6+B87q8zPGUnA',
		'sketchy'   => 'sha384-N8DsABZCqc1XWbg/bAlIDk7AS/yNzT5fcKzg/TwfmTuUqZhGquVmpb5VvfmLcMzp',
		'slate'     => 'sha384-FBPbZPVh+7ks5JJ70RJmIaqyGnvMbeJ5JQfEbW0Ac6ErfvEg9yG56JQJuMNptWsH',
		'solar'     => 'sha384-8nq3OiMMgrVFAHyRMMO+DTfMEciSY+c3Awhj/5ljQ1xck1Uv2BUtMjsjLD8GT5Er',
		'spacelab'  => 'sha384-sZG5VVk41YqhJjYXgJFoRVd3d2AdDgy4oyIytQJMGx/Mizz1N+5bgKQBSCGfKQnP',
		'superhero' => 'sha384-LS4/wo5Z/8SLpOLHs0IbuPAGOWTx30XSoZJ8o7WKH0UJhRpjXXTpODOjfVnNjeHu',
		'united'    => 'sha384-WTtvlZJeRyCiKUtbQ88X1x9uHmKi0eHCbQ8irbzqSLkE0DpAZuixT5yFvgX0CjIu',
		'yeti'      => 'sha384-w6tc0TXjTUnYHwVwGgnYyV12wbRoJQo9iMlC2KdkdmVvntGgzT9jvqNEF/uKaF4m',
	);

	public function init()
	{
		if(isset(\Yii::$app->params['p2assets']['bootswatchTheme'])) {
			$themeName = \Yii::$app->params['p2assets']['bootswatchTheme'];
			$this->resourceData['static']['baseUrl'] =
				'https://stackpath.bootstrapcdn.com/bootswatch/##-version-##/' . $themeName;
			$this->resourceData['published']['sourcePath'] =
				'@vendor/thomaspark/bootswatch/dist/' . $themeName;
			$this->resourceData['static']['css'] = [
				'bootstrap.min.css',
			];
			$this->resourceData['static']['cssOptions'] = [
				'integrity' => $this->bootswatchIntegrity[$themeName],
				'crossorigin' => 'anonymous',
			];
			$this->resourceData['published']['css'] = [
				'bootstrap.min.css',
			];
		}

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

/* params
	'p2assets' => [
		'useStatic' => true, // false or not set to use published assets
		'bootswatchTheme' = 'cerulean', // set to _one_ of:
			// 'cerulean', 'cosmo', 'cyborg', 'darkly',
			// 'flatly', 'journal', 'litera', 'lumen',
			// 'lux', 'materia', 'minty', 'pulse',
			// 'sandstone', 'simplex', 'sketchy', 'slate',
			// 'solar', 'spacelab', 'superhero', 'united',
			// 'yeti',
	],
*/
