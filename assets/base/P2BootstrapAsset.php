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
