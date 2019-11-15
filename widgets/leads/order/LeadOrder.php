<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 2:37 PM
 */

namespace frontend\widgets\leads\order;

use pantera\leads\models\Lead;

class LeadOrder extends Lead
{
    public $name;
    public $phone;
    public $email;
    public $detail;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['email', 'required'];
        $rules[] = ['email', 'email'];
        $rules[] = ['detail', 'string'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Ваше имя';
        $labels['phone'] = 'Ваш номер телефона';
        $labels['email'] = 'Ваш E-mail';
        $labels['detail'] = 'Детали заказа';
        return $labels;
    }
}
