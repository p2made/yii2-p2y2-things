<?php
/**
 * Lightbox2Asset.php
 *
 * Yii2 asset for Lightbox2
 * http://lokeshdhakar.com/projects/lightbox2/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\Lightbox2Asset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\Lightbox2Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\Lightbox2Asset',
 */

namespace p2m\assets;

class Lightbox2Asset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}

/*
	@vendor/bower/lightbox2/dist/css/lightbox.min.css

	@vendor/bower/lightbox2/dist/images/close.png
	@vendor/bower/lightbox2/dist/images/loading.gif
	@vendor/bower/lightbox2/dist/images/next.png
	@vendor/bower/lightbox2/dist/images/prev.png

	@vendor/bower/lightbox2/dist/js/lightbox-plus-jquery.min.js
	@vendor/bower/lightbox2/dist/js/lightbox.min.js


	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css

	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/close.png
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/loading.gif
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/next.png
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/images/prev.png

	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js
	//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js
 */
