<?php

use yii\db\Migration;

/**
 * Class m240108_175709_order_goods
 */
class m240108_175709_order_goods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('order_goods',[
            'id' => $this-> primaryKey(),
            'goods_id' => $this -> integer() -> notNull(),
            'order_id' => $this -> integer() -> notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('order_goods');

        echo 'УДАЛЕНО';
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240108_175709_order_goods cannot be reverted.\n";

        return false;
    }
    */
}
