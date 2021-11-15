<?php

use yii\db\Migration;

/**
 * Class m211115_205711_Usuarios
 */
class m211115_205711_Usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Usuarios (ID, LOGIN, SENHA, NOME, E-MAIL, FOTO)
        $this->createTable('USUARIOS', [
            'ID' => $this->primaryKey(),
            'LOGIN' => $this->string()->notNull(),
            'SENHA' => $this->string(),
            'EMAIL' => $this->string()->notNull(),
            'FOTO' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('USUARIOS');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211115_205711_Usuarios cannot be reverted.\n";

        return false;
    }
    */
}
