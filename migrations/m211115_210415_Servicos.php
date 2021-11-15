<?php

use yii\db\Migration;

/**
 * Class m211115_210415_Servicos
 */
class m211115_210415_Servicos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Serviços (ID,NOME, DESCRICAO, SKILL_FK)
        $this->createTable('SERVICOS', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string()->notNull(),
            'DESCRICAO' => $this->string(),
            'FEATURED_IMG' => $this->string(),
            'SKILL_ID' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('SERVICOS');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211115_210415_Servicos cannot be reverted.\n";

        return false;
    }
    */
}
