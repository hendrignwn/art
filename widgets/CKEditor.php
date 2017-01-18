<?php

namespace app\widgets;

use dosamigos\ckeditor\CKEditor as BaseCKEditor;
use iutbay\yii2kcfinder\KCFinderAsset;
use yii\helpers\ArrayHelper;

/**
 * description of CKEditor
 * 
 * @author Hendri
 */
class CKEditor extends BaseCKEditor
{
    /**
     * @var $enableKCFinder is default true
     */
    public $enableKCFinder = true;
    
    /**
     * @var $kcfOptions
     */
    public $kcfOptions = [];

    /**
     * Registers CKEditor plugin
     */
    protected function registerPlugin()
    {
        if ($this->enableKCFinder) {
            $this->registerKCFinder();
        }

        parent::registerPlugin();
    }

    /**
     * Registers KCFinder
     */
    protected function registerKCFinder()
    {
        $register = KCFinderAsset::register($this->view);
        $kcfinderUrl = $register->baseUrl;

        $browseOptions = ArrayHelper::merge($this->kcfOptions, [
            'filebrowserBrowseUrl' => $kcfinderUrl . '/browse.php?opener=ckeditor&type=files',
            'filebrowserImageBrowseUrl' => $kcfinderUrl . '/browse.php?opener=ckeditor&type=images',
            'filebrowserFlashBrowseUrl' => $kcfinderUrl . '/browse.php?opener=ckeditor&type=flash',
            'filebrowserUploadUrl' => $kcfinderUrl . '/upload.php?opener=ckeditor&type=files',
            'filebrowserImageUploadUrl' => $kcfinderUrl . '/upload.php?opener=ckeditor&type=images',
            'filebrowserFlashUploadUrl' => $kcfinderUrl . '/upload.php?opener=ckeditor&type=flash',
        ]);

        $this->clientOptions = ArrayHelper::merge($browseOptions, $this->clientOptions);
    }

}