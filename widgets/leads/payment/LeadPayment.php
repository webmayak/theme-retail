<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 2:37 PM
 */

namespace frontend\widgets\leads\payment;

use pantera\leads\models\Lead;

class LeadPayment extends Lead
{
    public $name;
    public $phone;
    public $address;
    public $number;
    public $sum;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['address', 'required'];
        $rules[] = ['number', 'required'];
        $rules[] = ['sum', 'required'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Ваше ФИО';
        $labels['phone'] = 'Ваш телефона';
        $labels['address'] = 'Адрес установки';
        $labels['number'] = 'Номер договора';
        $labels['sum'] = 'Укажите сумму платежа';
        return $labels;
    }
}
