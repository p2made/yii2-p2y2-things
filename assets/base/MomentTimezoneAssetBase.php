<?php
/**
 * MomentTimezoneAssetBase.php
 *
 * Yii2 asset for Moment.js & Moment Timezone
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\MomentTimezoneAssetBase
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
 * p2m\assets\base\MomentTimezoneAssetBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\MomentTimezoneAssetBase',
 */

namespace p2m\assets\base;

class MomentTimezoneAssetBase extends \p2m\base\assets\P2AssetBase
{
	protected $packageName = 'moment';

	protected $packageVersion = '0.5.27';
}
