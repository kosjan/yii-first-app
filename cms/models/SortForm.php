<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
* ContactForm is the model behind the contact form.
*/
class SortForm extends Model
{
  public $rule;
  public $number;


  /**
  * @return array the validation rules.
  */
  public function rules()
  {
    return [
      [['rule', 'number'], 'trim'],
    ];
  }

}
