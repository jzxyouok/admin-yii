<?php
namespace backend\controllers;

use Yii;
use common\BaseController\AdminBaseController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends AdminBaseController
{
    public function init() {
        $this->getView()->title = "氷 落 小站";  
        parent::init();
    }

    /**
     * 后台首页数据
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
