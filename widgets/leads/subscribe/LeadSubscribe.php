<?php

namespace frontend\themes\retail\widgets\leads\subscribe;

use pantera\leads\models\Lead;

class LeadSubscribe extends Lead
{
    public $email;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['email', 'required'];
        $rules[] = ['email', 'email'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['email'] = 'Ваш E-mail';
        return $labels;
    }
}
