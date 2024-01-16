<?php

use yii\db\Migration;

/**
 * Class m231229_153259_iniDb
 */
class m231229_153259_iniDb extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users',[
            'id' => $this-> primaryKey(),
                'email' => $this -> string(100) -> unique()-> notNull(),
                'password'=> $this -> string(120) -> notNull(),
                'is_admin'=> $this -> boolean() -> defaultValue(false),
            ]);

        $this-> insert('users',[
                'email' => 'admin@admin.admin',
                'password'=> password_hash('admin', PASSWORD_DEFAULT),
                'is_admin'=> true,
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('users');
        echo  'удалена';
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231229_153259_iniDb cannot be reverted.\n";

        return false;
    }
    */
}
