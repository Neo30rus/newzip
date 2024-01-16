<?php

namespace app\models;

class MyNewForm extends \yii\base\Model
{
    public $firstName;
    public $lastName;
    public $patronymic;
    public $email;
    public $password;
    public $passwordRepeat;
    public $list;
    public $key;

    public function rules()
    {
        return [
            [
                [
                    'firstName',
                    'lastName',
                    'email',
                    'password',
                    'passwordRepeat',
                    'list',
                    'key',
                ],
                'required', 'message' => 'Параметр не определён'
            ],
            ['patronymic', 'string'],
            ['patronymic', 'default', 'value' => 'Нет отчества'],
            ['email', 'email'],
            ['passwordRepeat', 'compare', 'compareAttribute' => 'password'],
            ['list', 'in', 'range' => [1, 2]],
            [['password', 'passwordRepeat',],'string', 'length' => [8,8]],
            ['key', 'validateKey']
        ];
    }
    public function validateKey($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $hash = password_hash('ad', PASSWORD_DEFAULT);

            if (!password_verify($this->key, $hash)) {
                $this->addError($attribute, 'Ключ не правильный');
            }
        }
    }
}