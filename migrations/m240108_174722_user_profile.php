<?php

use yii\db\Migration;

/**
 * Class m240108_174722_user_profile
 */
class m240108_174722_user_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('user_profile',[
            'id' => $this-> primaryKey(),
            'fio' => $this -> string(100) -> notNull(),
            'email' => $this -> string(100)-> unique() -> notNull(),
            'phone' => $this -> integer() -> unique() -> notNull(),
            'address' => $this -> integer() -> notNull(),
            'user_id' => $this -> integer() -> notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('user_profile');
        echo  'МИГРАЦИЯ УДАЛЕНА';
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240108_174722_user_profile cannot be reverted.\n";

        return false;
    }
    */
}
