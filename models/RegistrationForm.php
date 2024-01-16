<?php

namespace app\models;
use app\repository\UserRepository;

class RegistrationForm extends \yii\base\Model
{
    public $login;
    public $password;
    public $passwordRepeat;



    public function rules()
    {
        return [
          [['login','password','passwordRepeat'] , 'required',],
          ['passwordRepeat','compare','compareAttribute' => 'password'],
          ['login','validateLogin']
        ];
    }

    public function validateLogin($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UserRepository::getUserByLogin($this -> login);

            if ($user) {
                $this->addError($attribute, 'Пользователь существувет');
            }
        }
    }

}