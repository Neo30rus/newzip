<?php

use yii\db\Migration;

/**
 * Class m231229_153300_initDb
 */
class m231229_153300_initDb extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100)->unique()->notNull(),
            'password' => $this->string(120)->notNull(),
            'is_admin' => $this->boolean()->defaultValue(false)
        ]);

        $this->insert('users', [
            'email' => 'admin@admin.admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'is_admin' => true
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
        echo 'Удалена табличка';
    }
}
