<?php

use yii\db\Migration;

/**
 * Class m240108_180252_goods
 */
class m240108_180252_goods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('goods',[
            'id' => $this-> primaryKey(),
            'name' => $this -> string(100) -> notNull(),
            'amount' => $this -> integer() -> notNull(),
            'price' => $this -> float() -> notNull(),
            'sale' => $this -> integer(),
            'img' => $this -> text()-> notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('goods');
        echo 'УДАЛЕНО';
    }


}
