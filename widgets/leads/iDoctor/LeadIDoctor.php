<?php

namespace frontend\themes\retail\widgets\leads\iDoctor;

use pantera\leads\models\Lead;

class LeadIDoctor extends Lead
{
    public $name;
    public $phone;
    public $city;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['city', 'required'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Имя';
        $labels['phone'] = 'Номер телефона';
        $labels['city'] = 'Город';
        return $labels;
    }
}
