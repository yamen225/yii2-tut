<?php

namespace app\models;
use yii\base\Model;
/**
 *
 */
class UserForm extends Model
{
  public $name;
  public$email;


  public function rules()
  {
    # code...
    return[
      [['name','email'],'required'],
      ['email','email']
    ];
  }
}


 ?>
