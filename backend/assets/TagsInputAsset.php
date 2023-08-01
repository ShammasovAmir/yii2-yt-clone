<?php

namespace backend\assets;

class TagsInputAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot/tagsinput';
    public $baseUrl = '@web/tagsinput';
    public $css = [
        'tagsinput.css'
    ];
    public $js = [
        'tagsinput.js'
    ];

    public $depends = [
        \yii\web\JqueryAsset::class
    ];
}