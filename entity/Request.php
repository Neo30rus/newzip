<?php

namespace app\entity;

class Request extends \yii\db\ActiveRecord
{
    public function getUser()
    {
        return $this->hasOne(Users::class, ['id' => 'user_id']);
    }
}