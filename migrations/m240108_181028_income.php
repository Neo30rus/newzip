<?php

use yii\db\Migration;

/**
 * Class m240108_181028_income
 */
class m240108_181028_income extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('income',[
            'id' => $this-> primaryKey(),
            'amount' => $this -> integer() -> notNull(),
            'date' => $this -> date(),
            'goods_id' => $this -> integer() -> notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('income');
        echo 'УДАЛЕНО';
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240108_181028_income cannot be reverted.\n";

        return false;
    }
    */
}
