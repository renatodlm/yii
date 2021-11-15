<?php

use yii\db\Migration;

/**
 * Class m211115_215946_Projetos_FK
 */
class m211115_215946_Projetos_FK extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'servico_fk',
            'PROJETOS',
            'SERVICO_ID',
            'SERVICOS',
            'ID',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('servico_fk', 'PROJETOS');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211115_215946_Projetos_FK cannot be reverted.\n";

        return false;
    }
    */
}
