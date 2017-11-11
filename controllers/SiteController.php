<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
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
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact($images = [])
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post())) {

            $email = Yii::$app->mailer->compose()
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setFrom([Yii::$app->params['coreEmail'] => 'Tequeño Mucho Web'])
                    ->setSubject('Nuevo mensaje de la página web')
                    ->setHtmlBody("
<p><b>Nombre:</b> " . $model->name . "</p>
<p><b>Correo:</b> " . $model->email . "</p>
<p><b>Asunto:</b> " . $model->subject . "</p>
<p><b>Mensaje:</b> " . $model->body . "</p>")
                    ->send();

                    if($email){
                        Yii::$app->getSession()->setFlash('success','Mensaje enviado correctamente.');
                    }
                    else{
                        Yii::$app->getSession()->setFlash('warning','Error al enviar el mensaje. Por favor intente mas tarde.');
                    }
                    return $this->refresh();
        }

        $files = FileHelper::findFiles(Yii::getAlias('@app') .'/web/images/slider/contact/');

        foreach($files as $file) {
            $array = explode(DIRECTORY_SEPARATOR, $file);
            $image = array_pop($array);
            array_push($images, '/images/slider/contact/'.$image);
        }

        return $this->render('contact', [
            'model'  => $model,
            'images' => $images,
        ]);
    }

    /**
     * Displays gallery page.
     *
     * @return string
     */
    public function actionGallery($images = [])
    {
        $files = FileHelper::findFiles(Yii::getAlias('@app') .'/web/images/gallery');
        foreach($files as $file) {
            $array = explode(DIRECTORY_SEPARATOR, $file);
            $image = array_pop($array);
            array_push($images, '/images/gallery/'.$image);
        }
        return $this->render('gallery', ['images' => $images]);
    }

    /**
     * Displays product page.
     *
     * @return string
     */
    public function actionProducts()
    {
        return $this->render('products');
    }
}
