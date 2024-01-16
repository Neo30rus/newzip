<?php

use yii\db\Migration;

/**
 * Class m231229_155106_Request
 */
class m231229_155106_Request extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('request',[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'timestamp' => $this->timestamp()->defaultExpression('NOW()')->notNull(),
            'user_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey(
            'user_to_request_fk',
            'request',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    public function safeDown()
    {
        $this->dropTable('request');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231229_155106_Request cannot be reverted.\n";

        return false;
    }
    */
}
