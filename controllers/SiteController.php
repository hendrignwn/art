<?php

namespace app\controllers;

use app\models\Client;
use app\models\ContactForm;
use app\models\Page;
use app\models\search\PortfolioSearch;
use app\models\Subscribe;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'app\components\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => \YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = '//home';
        
        $contactModel = new ContactForm();
        if ($contactModel->load(Yii::$app->request->post()) && $contactModel->contact()) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh('#contact');
        }
        
        $subscribe = new Subscribe();
        if ($subscribe->load(Yii::$app->request->post()) && $subscribe->save()) {
            Yii::$app->session->setFlash('SubscribeFormSubmitted');
            return $this->refresh('#subscribe-form');
        }
        
        $portfolioSearch = new PortfolioSearch();
        $portfolioProvider = $portfolioSearch->search(Yii::$app->request->queryParams);
        $portfolioProvider->setPagination(['pageSize'=>3]);
                
        $shortService = Page::findOne(['id' => Page::PAGE_SERVICE_PARTIAL, 'status' => Page::STATUS_ACTIVE]);
        
        return $this->render('index', [
            'contactModel' => $contactModel,
            'shortService' => $shortService,
            'subscribeForm' => $subscribe,
            'portfolioProvider' => $portfolioProvider,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact()) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh('#contact');
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $model = Page::findOne(Page::PAGE_ABOUT);
        
        $clients = Client::find()
                ->actived()
                ->orderBy(['name'=>SORT_ASC])
                ->all();
        
        return $this->render('about', [
            'model' => $model,
            'clients' => $clients,
        ]);
    }
    
    /**
     * displays maintenance page.
     * 
     * @return string
     */
    public function actionMaintenance()
    {
        return $this->render('maintenance');
    }
    
    public function actionTest()
    {
        $contact = \app\models\Contact::findOne(1);
        
        $contact->sendEmailNewNotification();
        
        die(true);
    }
}
