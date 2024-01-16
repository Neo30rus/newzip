<?php

namespace app\entity;


use app\repository\UserRepository;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * @property int id Индетификатор;
 * @property string email Email;
 * @property string password Пароль;
 * @property boolean is_админ Флаг админа;
 */


class Users extends ActiveRecord implements IdentityInterface
{
    public function getRequests()
    {
        return $this->hasMany(Request::class, ['user_id' => 'id']);
    }

    public static function findIdentity($id)
    {
        return UserRepository::getUserById($id);

    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}