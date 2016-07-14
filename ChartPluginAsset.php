<?php
/**
 * @link https://github.com/hrmohseni/yii2-morrisjs-charts
 * @copyright Copyright (c) 2015
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace rafk\morrisjs;

use yii\web\AssetBundle;
/**
 * ChartPluginAsset.php
 *  */
class ChartPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/morrisjs';
    public $depends = [
        'yii\web\YiiAsset',
        'rafk\raphaeljs\RaphaelAsset'
    ];
    
    public function init()
    {
        $this->js = YII_DEBUG ? ['morris.js'] : ['morris.min.js'];
        $this->css = ['morris.css'];
    }
}