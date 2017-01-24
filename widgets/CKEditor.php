<?php

namespace app\widgets;

use dosamigos\ckeditor\CKEditor as BaseCKEditor;
use iutbay\yii2kcfinder\KCFinder;
use iutbay\yii2kcfinder\KCFinderAsset;
use Yii;
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
     * @var $autoParagraph is default false
     */
    public $autoParagraph = false;
    
    /**
     * @var $kcfOptions
     */
    public $kcfOptions = [];
    
    public function init()
    {
        if ($this->enableKCFinder) {
            Yii::$app->session->remove('KCFINDER');
            $this->kcfOptions = ArrayHelper::merge($this->kcfOptions, [
                'uploadURL' => Yii::getAlias('@web/uploads'),
                'uploadDir' => Yii::getAlias('@app/web/uploads'),
                'maxImageWidth' => 1000,
                'maxImageHeight' => 1000,
                'access' => [
                    'files' => [
                        'upload' => true,
                        'delete' => true,
                        'copy' => true,
                        'move' => true,
                        'rename' => true
                    ],
                    'dirs' => [
                        'create' => true,
                        'delete' => true,
                        'rename' => true
                    ]
                ],
                'types' => [
                    // (F)CKEditor types
                    'files' => 'pdf',
                    'flash' => 'swf',
                    'images' => '*img',
                    // TinyMCE types
                    'file' => 'pdf',
                    'media' => 'swf flv avi mpg mpeg qt mov wmv asf rm',
                    'image' => '*img',
                ],
            ]);

            $kcfOptions = ArrayHelper::merge(KCFinder::$kcfDefaultOptions, $this->kcfOptions);
            Yii::$app->session->set('KCFINDER', $kcfOptions);
        }
        
        return parent::init();
    }

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
            'autoParagraph' => $this->autoParagraph,
        ]);

        $this->clientOptions = ArrayHelper::merge($browseOptions, $this->clientOptions);
    }

}