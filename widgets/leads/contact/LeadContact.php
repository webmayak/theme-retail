<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 2:37 PM
 */

namespace frontend\widgets\leads\contact;

use pantera\leads\models\Lead;

class LeadContact extends Lead
{
    public $firstName;
    public $lastName;
    public $phone;
    public $email;
    public $comment;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['firstName', 'required'];
        $rules[] = ['lastName', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['email', 'required'];
        $rules[] = ['email', 'email'];
        $rules[] = ['comment', 'required'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['firstName'] = 'Ваше имя';
        $labels['lastName'] = 'Ваша Фамилия';
        $labels['phone'] = 'Ваш номер телефона';
        $labels['email'] = 'Ваш E-mail';
        $labels['comment'] = 'Ваш комментарий';
        return $labels;
    }
}
