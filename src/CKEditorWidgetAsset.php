<?php
/**
 * @copyright Copyright (c) 2013-2019 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace elephantsGroup\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/elephantsgroup/eg-ckeditor-widget/src/assets/';

    public $depends = [
        'elephantsGroup\ckeditor\CKEditorAsset'
    ];

    public $js = [
        'dosamigos-ckeditor.widget.js'
    ];
}
