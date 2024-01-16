<?php

use yii\db\Migration;

/**
 * Class m231229_155117_Reguest
 */
class m231229_155117_Reguest extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> renameColumn('users','email','login');
        $this->createTable('reguest',[
            'id' => $this-> primaryKey(),
            'title' => $this -> string() -> notNull(),
            'discription'=> $this -> text(),
            'timestamp'=> $this -> timestamp()->defaultExpression('NOW()')-> notNull(),
            'user_id' => $this -> integer() -> notNull()
        ]);

       $this -> addForeignKey(
         'user_to_reguest_fk',
         'reguest',
         'user_id',
         'users',
         'id',
         'CASCADE',
         'CASCADE'
       );
       $this -> createTable('orders',[
       'id' => $this-> primaryKey(),
            'date' => $this -> date(),
            'price' => $this -> integer() -> notNull()-> defaultValue(0),
            'user_id' => $this -> integer() -> notNull()
           ]);
        $this -> addForeignKey(
            'user_to_orders_fk',
            'orders',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> renameColumn('users','login','email');
        $this -> dropTable('reguest');
        echo  'удалена';
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231229_155117_Reguest cannot be reverted.\n";

        return false;
    }
    */
}
