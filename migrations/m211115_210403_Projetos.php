<?php

use yii\db\Migration;

/**
 * Class m211115_210403_Projetos
 */
class m211115_210403_Projetos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Projetos (ID, NOME, DESCRICAO,ANO, FEATURED_IMG , SERVICO_FK)
        $this->createTable('PROJETOS', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string()->notNull(),
            'DESCRICAO' => $this->string(),
            'ANO' => $this->string(),
            'FEATURED_IMG' => $this->string(),
            'SERVICO_ID' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('PROJETOS');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211115_210403_Projetos cannot be reverted.\n";

        return false;
    }
    */
}
