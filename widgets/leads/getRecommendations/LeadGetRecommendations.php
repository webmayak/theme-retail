<?php

namespace frontend\themes\retail\widgets\leads\getRecommendations;

use pantera\leads\models\Lead;

class LeadGetRecommendations extends Lead
{
    public $name;
    public $phone;
    public $email;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['email', 'email'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Имя';
        $labels['phone'] = 'Номер телефона';
        $labels['email'] = 'E-mail';
        return $labels;
    }
}
