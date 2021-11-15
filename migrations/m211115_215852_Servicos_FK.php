<?php

use yii\db\Migration;

/**
 * Class m211115_215852_Servicos_FK
 */
class m211115_215852_Servicos_FK extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('skill_fk', 'SERVICOS', 'SKILL_ID', 'SKILLS', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('skill_fk', 'SERVICOS');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211115_215852_Servicos_FK cannot be reverted.\n";

        return false;
    }
    */
}
