<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Users;

/**
 *
 */
class UsersController extends Controller
{

  public function actionIndex()
  {
    # code...
    $users = Users::find()->all();
    return $this->render('index',['users'=>$users]);
  }
}

 ?>
