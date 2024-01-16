<?php

use yii\db\Migration;

/**
 * Class m240108_175514_delete_request
 */
class m240108_175514_delete_request extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> dropTable('reguest');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240108_175514_delete_request cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240108_175514_delete_request cannot be reverted.\n";

        return false;
    }
    */
}
