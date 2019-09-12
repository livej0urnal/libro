<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\controllers\AppController;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->setMeta('Admin panel');
        return $this->render('index');
    }
}
