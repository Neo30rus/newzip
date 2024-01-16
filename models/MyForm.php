<?php

namespace app\models;

use yii\base\Model;

class MyForm extends Model
{
    public $firstName;
    public $lastName;
    public $patronymic;
    public $series;
    public $number;
    public $gender;
    public $place;
    public $date;
    public $code;
    public $dateofbirth;
    public $placeofbirth;


    public function rules(){
        return[
            [[
                'firstName', 'email',
                'gender', 'key',
            ], 'required'],
            ['lastname', 'default'],
            ['patronymic', 'default'],
            ['gender', 'in', 'range' => ['м','ж']],
            [['series'], 'string', 'length' => [4,4]],
            [['number'], 'string', 'length' => [6,6]],
            [['code'],'string', 'length' => [7,7]],
            [['code'],'match', 'pattern' => '/\d{3}-/\d{3}'],


        ];
    }
}