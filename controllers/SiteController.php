<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\controllers\AppController;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Authors;
use app\models\Category;
use app\models\Articles;
use app\models\Comments;
use yii\data\Pagination;
use app\models\ContactsForm;
use app\models\CommentsForm;

class SiteController extends AppController
{
    /**
     * {@inheritdoc}
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
                    'logout' => ['post' , 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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
        $id = Yii::$app->request->get('id');
        $articles = Articles::find()->all();
        if(empty($articles))
        {
            throw new HttpException(404, 'The requested Item could not be found');
        }
        $query = Articles::find()->orderby(['id'=>SORT_DESC]);
        $pages = new Pagination(['totalCount'=> $query->count(), 'pageSize' => 6 , 'forcePageParam' => false, 'pageSizeParam' => false]);
        $articles = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Libro blog template');
        return $this->render('index' , compact('articles' , 'pages'));
    }

    public function actionCategory($id)
    {
        $id = Yii::$app->request->get('id');
        $category = Category::findOne($id);
        $articles = Articles::find()->where(['categoryid' => $id] )->all();
        return $this->render('category' , compact('articles'));
    }

    public function actionSingle($id)
    {
        $id = Yii::$app->request->get('id');
        $article = Articles::findOne($id);
        $comments = Comments::find()->where(['articleid' => $id])->all();
        $model = new CommentsForm();
        $model->articleid = $article->id;
        $model->published = date("c");
        $model->name = stripcslashes($model->name);
        $model->name = strip_tags($model->name);
        if($model->load(Yii::$app->request->post())){
            if($model->save()){

                Yii::$app->session->setFlash('success' , 'Done');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error' , 'Error');
                return $this->refresh();
            }
        }
        $this->setMeta($article->title);
        return $this->render('single' , compact('article' , 'comments' , 'model'));
    }
    /**
     * Login action.
     *
     * @return Response|string
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

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactsForm();

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $model->ipuser = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $model->ipuser = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $model->ipuser = $_SERVER['REMOTE_ADDR'];
        }
        if($model->load(Yii::$app->request->post())){
            $model->name = trim($model->name);
            $model->name = stripcslashes($model->name);
            $model->name = strip_tags($model->name);
            $model->name = htmlspecialchars($model->name);
            $model->email = trim($model->email);
            $model->email = stripcslashes($model->email);
            $model->email = strip_tags($model->email);
            $model->email = htmlspecialchars($model->email);
            $model->message = trim($model->message);
            $model->message = stripcslashes($model->message);
            $model->message = strip_tags($model->message);
            $model->message = htmlspecialchars($model->message);
            if($model->save()){

                Yii::$app->session->setFlash('success' , 'Done');
                return $this->refresh();

            } else{
                Yii::$app->session->setFlash('error' , 'Error');
            }
        }
        return $this->render('contact' , compact('model'));
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $id = Yii::$app->request->get('id');
        $id = 1;
        $author = Authors::findOne($id);
        return $this->render('about' , compact('author'));
    }
}
